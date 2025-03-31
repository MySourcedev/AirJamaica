@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>{{ isset($news) ? 'Edit' : 'Create' }} News</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ isset($news) ? route('news.update', $news->id) : route('news.store') }}" enctype="multipart/form-data">
        @csrf
        @isset($news) @method('PUT') @endisset
        
        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                   id="title" name="title" 
                   value="{{ old('title', $news->title ?? '') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="subject" class="form-label">Subject*</label>
            <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                   id="subject" name="subject" 
                   value="{{ old('subject', $news->subject ?? '') }}" required>
            @error('subject')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="featured_image" class="form-label">Featured Image</label>
            <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                   id="featured_image" name="featured_image">
            @error('featured_image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @isset($news->featured_image)
                <div class="mt-2">
                    <img src="{{ $news->getFirstMediaUrl('featured_image') }}" alt="Current featured image" class="img-thumbnail" width="200">
                </div>
            @endisset
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content*</label>
            <input id="content" type="hidden" name="content" 
                   value="{{ old('content', $news->content ?? '') }}">
            <trix-editor input="content" class="trix-content @error('content') is-invalid @enderror"></trix-editor>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3 form-check form-switch">
            <input type="checkbox" class="form-check-input" id="published" name="published" 
                {{ old('published', isset($news) && $news->published ? 'checked' : '') }}>
            <label class="form-check-label" for="published">Publish</label>
        </div>
        
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save
            </button>
            
            @isset($news)
                <button type="button" class="btn btn-danger" 
                        onclick="confirmDelete()">
                    <i class="fas fa-trash"></i> Delete
                </button>
            @endisset
        </div>
    </form>

    @isset($news)
        <form id="delete-form" action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>
    @endisset
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<script>
    function confirmDelete() {
        if (confirm('Are you sure you want to delete this news item?')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
@endsection