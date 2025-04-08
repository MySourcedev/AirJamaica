@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Screenshot Gallery</h1>
    
    <div class="row">
        @forelse($screenshots as $screenshot)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- Screenshot Image -->
                    <div class="screenshot-container text-center p-3 bg-light">
                        <img src="{{ $screenshot->image_url }}" 
                             alt="Screenshot" 
                             class="img-fluid rounded"
                             style="max-height: 250px; width: auto;">
                    </div>
                    
                    <!-- Screenshot Info -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <span class="badge bg-primary">
                                    <i class="fas fa-eye"></i> {{ $screenshot->views }} views
                                </span>
                                <span class="badge bg-success ms-2">
                                    <i class="fas fa-star"></i> {{ $screenshot->rating }}/5
                                </span>
                            </div>
                            <small class="text-muted">
                                {{ $screenshot->created_at->diffForHumans() }}
                            </small>
                        </div>
                        
                        <h5 class="card-title">{{ $screenshot->user->name }}'s Screenshot</h5>
                        <p class="card-text text-muted">{{ Str::limit($screenshot->description, 100) }}</p>
                    </div>
                    
                    <div class="card-footer bg-white">
                        <a href="{{ route('screenshots.show', $screenshot->id) }}" 
                           class="btn btn-sm btn-outline-primary">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">No screenshots available yet.</div>
            </div>
        @endforelse
    </div>
    
    <!-- Laravel Pagination -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $screenshots->links() }}
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .screenshot-container {
        min-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .badge {
        font-size: 0.8rem;
        padding: 0.4em 0.65em;
    }
    .pagination {
        justify-content: center;
    }
</style>
@endpush