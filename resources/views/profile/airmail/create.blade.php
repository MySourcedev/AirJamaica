@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        @isset($replyTo)
                            Reply to Message
                        @else
                            Compose New Message
                        @endisset
                    </h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('messages.store') }}" enctype="multipart/form-data">
                        @csrf
                        @isset($replyTo)
                            <input type="hidden" name="reply_to" value="{{ $replyTo->id }}">
                        @endisset

                        <div class="mb-3">
                            <label for="to" class="form-label">To</label>
                            <select name="to" id="to" class="form-control @error('to') is-invalid @enderror" required
                                @isset($replyTo) disabled @endisset>
                                @isset($replyTo)
                                    <option value="{{ $replyTo->sender->id }}" selected>
                                        {{ $replyTo->sender->name }}
                                    </option>
                                @else
                                    <option value="">Select recipient</option>
                                    @foreach($users as $user)
                                        @if($user->id != auth()->id())
                                            <option value="{{ $user->id }}" {{ old('to') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                @endisset
                            </select>
                            @error('to')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                   id="subject" name="subject" value="{{ old('subject', $subject ?? '') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input id="message" type="hidden" name="message" value="{{ old('message', $messageContent ?? '') }}">
                            <trix-editor input="message" class="trix-content @error('message') is-invalid @enderror"></trix-editor>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="attachments" class="form-label">Attachments</label>
                            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                            <small class="text-muted">Max 10MB per file</small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('messages.index') }}" class="btn btn-outline-secondary">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<style>
    .trix-content {
        min-height: 200px;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 0.375rem 0.75rem;
    }
    .trix-content:focus {
        color: #212529;
        background-color: #fff;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .attachment--preview {
        max-width: 100%;
        height: auto;
    }
    .attachment__caption {
        display: none;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });

    // Handle Trix attachments
    addEventListener("trix-attachment-add", function(event) {
        if (event.attachment.file) {
            uploadTrixAttachment(event.attachment);
        }
    });

    function uploadTrixAttachment(attachment) {
        const formData = new FormData();
        formData.append('file', attachment.file);

        fetch("{{ route('messages.trix.upload') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            attachment.setAttributes({
                url: data.image_url,
                href: data.image_url
            });
        })
        .catch(error => {
            console.error('Error uploading attachment:', error);
            attachment.remove();
        });
    }
</script>
@endpush