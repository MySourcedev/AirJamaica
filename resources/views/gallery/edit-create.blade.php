@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($gallery) ? 'Edit' : 'Create' }} Gallery Item</h1>
    
    <form method="POST" action="{{ isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($gallery))
            @method('PUT')
        @endif
        
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $gallery->description ?? '') }}</textarea>
        </div>
        
        @if(!isset($gallery))
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/png,image/webp,image/jpg,image/jpeg,image/gif" {{ !isset($gallery) ? 'required' : '' }}>
        </div>
        @else
        <div class="mb-3">
            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
        </div>
        @endif
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Cancel</a>
        
        @if(isset($gallery))
        <button type="button" class="btn btn-danger float-end" onclick="confirmDelete()">Delete</button>
        @endif
    </form>
    
    @if(isset($gallery))
    <form id="delete-form" action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-none">
        @csrf
        @method('DELETE')
    </form>
    
    <script>
        function confirmDelete() {
            if(confirm('Are you sure you want to delete this image?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
    @endif
</div>
@endsection