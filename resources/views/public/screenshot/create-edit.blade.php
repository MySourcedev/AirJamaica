@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom-0">
                    <h3 class="mb-0">
                        @isset($screenshot)
                            <i class="fas fa-edit me-2"></i>Edit Screenshot
                        @else
                            <i class="fas fa-upload me-2"></i>Upload New Screenshot
                        @endisset
                    </h3>
                </div>

                <div class="card-body">
                    <form 
                        action="{{ isset($screenshot) ? route('screenshots.update', $screenshot->id) : route('screenshots.store') }}" 
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @isset($screenshot)
                            @method('PUT')
                        @endisset

                        <!-- Image Upload/Preview -->
                        <div class="mb-4">
                            <label for="image" class="form-label">Screenshot Image</label>
                            
                            @isset($screenshot)
                                <div class="mb-3 text-center">
                                    <img src="{{ $screenshot->image_url }}" 
                                         alt="Current screenshot" 
                                         class="img-thumbnail mb-2"
                                         style="max-height: 200px;">
                                    <p class="text-muted small">Current image</p>
                                </div>
                            @endisset

                            <input type="file" 
                                   class="form-control @error('image') is-invalid @enderror" 
                                   id="image" 
                                   name="image"
                                   {{ !isset($screenshot) ? 'required' : '' }}>

                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-text">
                                @isset($screenshot)
                                    Upload a new image to replace the existing one
                                @else
                                    Select an image to upload
                                @endisset
                            </div>
                        </div>

                        <!-- Rating - Fixed Logic -->
                        <div class="mb-4">
                            <label for="rating" class="form-label">Rating</label>
                            <select class="form-select @error('rating') is-invalid @enderror" 
                                    id="rating" 
                                    name="rating"
                                    required>
                                @php
                                    $currentRating = isset($screenshot) ? $screenshot->rating : old('rating', 3);
                                @endphp
                                @foreach(range(1, 5) as $i)
                                    <option value="{{ $i }}" 
                                        {{ $currentRating == $i ? 'selected' : '' }}>
                                        {{ $i }} {{ str_repeat('★', $i) }}{{ str_repeat('☆', 5-$i) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('rating')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" 
                                      name="description" 
                                      rows="3">{{ isset($screenshot) ? $screenshot->description : old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Form Buttons -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('screenshots.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                @isset($screenshot)
                                    <i class="fas fa-save me-1"></i> Update Screenshot
                                @else
                                    <i class="fas fa-upload me-1"></i> Upload Screenshot
                                @endisset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection