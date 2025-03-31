@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gallery</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mb-3">
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add New Image</a>
    </div>
    
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="Gallery Image">
                <div class="card-body">
                    <p class="card-text">{{ $gallery->description }}</p>
                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center">
        {{ $galleries->links() }}
    </div>
</div>
@endsection