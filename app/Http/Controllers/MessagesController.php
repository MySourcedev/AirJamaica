<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Messages::with(['sender', 'recipient'])
            ->where('to', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('profile.airmail.inbox', compact('messages'));
    }

    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        
        if (request()->has('reply_to')) {
            $originalMessage = Messages::findOrFail(request('reply_to'));
            
            if ($originalMessage->to === Auth::id() && !$originalMessage->read_at) {
                $originalMessage->update(['read_at' => now()]);
            }
            
            return view('profile.airmail.create', [
                'users' => $users,
                'replyTo' => $originalMessage,
                'subject' => 'Re: ' . $originalMessage->subject,
                'messageContent' => "<br><br><blockquote>" . 
                    "<strong>Original message from " . $originalMessage->sender->name . "</strong><br>" .
                    "<em>" . $originalMessage->created_at->format('M j, Y \a\t g:i a') . "</em><br><br>" .
                    nl2br(e($originalMessage->message)) . 
                    "</blockquote>"
            ]);
        }
        
        return view('profile.airmail.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'to' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'reply_to' => 'nullable|exists:messages,id',
            'attachments.*' => 'nullable|file|max:10240' // 10MB max per file
        ]);

        $message = Messages::create([
            'to' => $validated['to'],
            'from' => Auth::id(),
            'subject' => $validated['subject'],
            'message' => $validated['message']
        ]);

        // Handle attachments
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $message->addMedia($file)
                    ->toMediaCollection('attachments');
            }
        }

        return redirect()->route('profile.airmail.inbox')
            ->with('success', 'Message sent successfully!');
    }

    public function show(Messages $message)
    {
        // Authorization check
        if ($message->to !== Auth::id()) {
            abort(403);
        }
        
        // Mark as read when viewing
        if (!$message->read_at) {
            $message->update(['read_at' => now()]);
        }

        return view('profile.airmail.show', compact('message'));
    }

    public function destroy(Messages $message)
    {
        // Authorization check
        if ($message->to !== Auth::id()) {
            abort(403);
        }
        
        $message->delete();
        
        return redirect()->route('profile.airmail.inbox')
            ->with('success', 'Message deleted successfully!');
    }

    // Trix Attachment Handling
    public function uploadTrixAttachment(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240'
        ]);
        
        $path = $request->file('file')->store('trix-attachments', 'public');
        
        return response()->json([
            'image_url' => Storage::url($path)
        ]);
    }

    public function deleteTrixAttachment(Request $request)
    {
        $request->validate([
            'attachment_url' => 'required|string'
        ]);
        
        $path = str_replace('/storage/', '', $request->attachment_url);
        Storage::disk('public')->delete($path);
        
        return response()->noContent();
    }
}