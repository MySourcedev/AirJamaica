@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Gallery Details</h2>
                </div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $gallery->image->image_url) }}" 
                             alt="{{ $gallery->description }}" 
                             class="img-fluid rounded"
                             style="max-height: 70vh;">
                    </div>
                    
                    <div class="mb-3">
                        <h4>Description:</h4>
                        <p>{{ $gallery->description }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <small class="text-muted">
                            Uploaded by: {{ $gallery->user->f_name. ' ' . $gallery->user->l_name }} | 
                            {{ $gallery->created_at->format('Y-m-d') }}
                        </small>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('gallery.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Gallery
                        </a>
                        
                        @auth
                            @if(Auth::id() === $gallery->user_id || Auth::user()->role === "Admin")
                                <div>
                                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">
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