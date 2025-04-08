@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Message Details</h5>
                    <div>
                        <a href="{{ route('messages.index') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Inbox
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h4>{{ $message->subject }}</h4>
                        <div class="d-flex justify-content-between text-muted small mb-3">
                            <span>
                                From: <strong>{{ $message->sender->name }}</strong>
                            </span>
                            <span>
                                {{ $message->created_at->format('M j, Y \a\t g:i a') }}
                            </span>
                        </div>
                        
                        <div class="message-content p-3 border rounded bg-light">
                            {!! nl2br(e($message->message)) !!}
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{ route('messages.create', ['reply_to' => $message->id]) }}" 
                               class="btn btn-primary btn-sm">
                                <i class="fas fa-reply"></i> Reply
                            </a>
                        </div>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete this message?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .message-content {
        white-space: pre-wrap;
    }
</style>
@endpush