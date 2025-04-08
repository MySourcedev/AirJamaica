@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Back Button -->
            <div class="mb-4">
                <a href="{{ route('screenshots.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Back to Gallery
                </a>
            </div>

            <!-- Screenshot Card -->
            <div class="card shadow-sm">
                <!-- Screenshot Image -->
                <div class="screenshot-display bg-light p-3 text-center">
                    <img src="{{ $screenshot->image_url }}" 
                         alt="Screenshot by {{ $screenshot->user->name }}" 
                         class="img-fluid rounded-top"
                         style="max-height: 70vh; width: auto;">
                </div>

                <!-- Screenshot Details -->
                <div class="card-body">
                    <!-- Header with user info and stats -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-user-circle fa-2x text-secondary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">{{ $screenshot->user->name }}</h5>
                                <small class="text-muted">
                                    Uploaded {{ $screenshot->created_at->format('M j, Y \a\t g:i a') }}
                                </small>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="text-center px-3 border-end">
                                <div class="h5 mb-0">{{ $screenshot->views }}</div>
                                <small class="text-muted">Views</small>
                            </div>
                            <div class="text-center px-3">
                                <div class="h5 mb-0">{{ $screenshot->rating }}/5</div>
                                <small class="text-muted">Rating</small>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <h4>About This Screenshot</h4>
                        <p class="text-muted mb-0">
                            @if($screenshot->description)
                                {{ $screenshot->description }}
                            @else
                                <span class="text-muted fst-italic">No description provided</span>
                            @endif
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <a href="{{ $screenshot->image_url }}" 
                           class="btn btn-primary"
                           download>
                            <i class="fas fa-download me-1"></i> Download Image
                        </a>

                        @auth
                            @if(Auth::id() === $screenshot->user_id)
                                <div>
                                    <a href="{{ route('screenshots.edit', $screenshot->id) }}" 
                                       class="btn btn-sm btn-outline-warning me-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('screenshots.destroy', $screenshot->id) }}" 
                                          method="POST" 
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .screenshot-display {
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }
    .card {
        border: none;
    }
</style>
@endpush