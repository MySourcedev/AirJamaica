@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Inbox</h5>
                    <span class="badge bg-primary">{{ $messages->total() }} messages</span>
                </div>

                <div class="card-body p-0">
                    @if($messages->isEmpty())
                        <div class="p-4 text-center text-muted">
                            <i class="fas fa-inbox fa-3x mb-3"></i>
                            <p class="h5">Your inbox is empty</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th width="20%">From</th>
                                        <th width="25%">Subject</th>
                                        <th width="40%">Message Preview</th>
                                        <th width="15%">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                    <tr class="{{ $message->read_at ? '' : 'fw-bold' }}" 
                                        style="cursor: pointer;" 
                                        onclick="window.location='{{ route('messages.show', $message->id) }}'"
                                        data-message-id="{{ $message->id }}">
                                        <td>{{ $message->sender->name }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td class="text-truncate" style="max-width: 300px;">{{ Str::limit($message->message, 50) }}</td>
                                        <td>
                                            {{ $message->created_at->diffForHumans() }}
                                            @if(!$message->read_at)
                                                <span class="badge bg-success ms-2">New</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>

                @if($messages->hasPages())
                <div class="card-footer">
                    {{ $messages->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Alternative approach if you prefer event delegation
    document.addEventListener('DOMContentLoaded', function() {
        const tableRows = document.querySelectorAll('tbody tr[data-message-id]');
        
        tableRows.forEach(row => {
            row.addEventListener('click', function() {
                const messageId = this.getAttribute('data-message-id');
                window.location.href = `/messages/${messageId}`;
            });
        });
    });
</script>
@endpush

@push('styles')
<style>
    tr[data-message-id]:hover {
        background-color: #f8f9fa;
    }
    .text-truncate {
        max-width: 300px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
@endpush