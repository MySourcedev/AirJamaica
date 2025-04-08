@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ isset($award) ? 'Edit Award' : 'Create New Award' }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" 
                          action="{{ isset($award) ? route('awards.update', $award->id) : route('awards.store') }}"
                          enctype="multipart/form-data">
                        @csrf
                        @if(isset($award))
                            @method('PUT')
                        @endif

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Award Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       name="name" 
                                       value="{{ old('name', $award->name ?? '') }}" 
                                       required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" 
                                          class="form-control @error('description') is-invalid @enderror" 
                                          name="description" 
                                          rows="3">{{ old('description', $award->description ?? '') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">
                                Award Image
                                @if(isset($award) && $award->image_path)
                                    <br><small class="text-muted">Current image:</small>
                                @endif
                            </label>
                            <div class="col-md-6">
                                @if(isset($award) && $award->image_path)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $award->image_path) }}" 
                                             alt="Current award image" 
                                             class="img-thumbnail" 
                                             style="max-height: 100px;">
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" name="remove_image" id="remove_image">
                                            <label class="form-check-label" for="remove_image">
                                                Remove current image
                                            </label>
                                        </div>
                                    </div>
                                @endif
                                <input id="image" type="file" 
                                       class="form-control @error('image') is-invalid @enderror" 
                                       name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="text-muted">Max 2MB. Allowed types: jpg, png, gif, svg.</small>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($award) ? 'Update Award' : 'Create Award' }}
                                </button>
                                <a href="{{ route('awards.index') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .img-thumbnail {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 0.25rem;
    }
    .form-check-input {
        margin-top: 0.25rem;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image preview functionality
        const imageInput = document.getElementById('image');
        const imagePreview = document.querySelector('.image-preview');
        
        if (imageInput) {
            imageInput.addEventListener('change', function(event) {
                if (event.target.files.length > 0) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        if (!imagePreview) {
                            // Create preview container if it doesn't exist
                            const previewDiv = document.createElement('div');
                            previewDiv.className = 'mb-2 image-preview';
                            previewDiv.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" style="max-height: 100px;">`;
                            imageInput.parentNode.insertBefore(previewDiv, imageInput);
                        } else {
                            imagePreview.querySelector('img').src = e.target.result;
                        }
                    };
                    
                    reader.readAsDataURL(file);
                }
            });
        }
        
        // Toggle remove image checkbox when new image is selected
        const removeImageCheckbox = document.getElementById('remove_image');
        if (removeImageCheckbox && imageInput) {
            imageInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    removeImageCheckbox.checked = false;
                }
            });
        }
    });
</script>
@endpush