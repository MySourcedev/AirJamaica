@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Edit Page: {{ $page->title }}</h1>
        <a href="{{ route('pages.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Pages
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pages.update', $page) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <!-- Main Content Section -->
                        <div class="form-group mb-4">
                            <label for="title" class="form-label">Page Title *</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $page->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="slug" class="form-label">URL Slug *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ url('/') }}/</span>
                                </div>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                       id="slug" name="slug" value="{{ old('slug', $page->slug) }}" required>
                            </div>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Must be unique and URL-friendly</small>
                        </div>

                        <div class="form-group mb-4">
                            <label for="content" class="form-label">Page Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="15">{{ old('content', $page->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Sidebar Settings Section -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Publish Settings</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" 
                                               id="is_published" name="is_published" 
                                               value="1" {{ old('is_published', $page->is_published) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_published">Published</label>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="published_at" class="form-label">Publish Date/Time</label>
                                    <input type="datetime-local" class="form-control" 
                                           id="published_at" name="published_at" 
                                           value="{{ old('published_at', optional($page->published_at)->format('Y-m-d\TH:i')) }}">
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update Page
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Settings Section -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white">
                                <h6 class="mb-0">Menu Settings</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" 
                                               id="in_menu" name="in_menu" 
                                               value="1" {{ old('in_menu', $page->in_menu) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="in_menu">Show in Menu</label>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="menu_title" class="form-label">Menu Title</label>
                                    <input type="text" class="form-control" 
                                           id="menu_title" name="menu_title" 
                                           value="{{ old('menu_title', $page->menu_title) }}">
                                    <small class="form-text text-muted">Leave blank to use page title</small>
                                </div>

                                <div class="form-group">
                                    <label for="menu_order" class="form-label">Menu Order</label>
                                    <input type="number" class="form-control" 
                                           id="menu_order" name="menu_order" 
                                           value="{{ old('menu_order', $page->menu_order) }}">
                                </div>
                            </div>
                        </div>

                        <!-- SEO Settings Section -->
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h6 class="mb-0">SEO Settings</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" 
                                           id="meta_title" name="meta_title" 
                                           value="{{ old('meta_title', $page->meta_title) }}">
                                    <small class="form-text text-muted">Recommended: 50-60 characters</small>
                                </div>

                                <div class="form-group">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" 
                                              id="meta_description" name="meta_description" 
                                              rows="3">{{ old('meta_description', $page->meta_description) }}</textarea>
                                    <small class="form-text text-muted">Recommended: 150-160 characters</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-switch .form-check-input {
        width: 2.5em;
        height: 1.5em;
    }
    .card-header h6 {
        font-weight: 600;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-generate slug from title if empty
        const titleField = document.getElementById('title');
        const slugField = document.getElementById('slug');
        
        if (titleField && slugField) {
            titleField.addEventListener('blur', function() {
                if (!slugField.value) {
                    slugField.value = slugify(this.value);
                }
            });
        }

        // Initialize WYSIWYG editor if needed
        if (typeof CKEDITOR !== 'undefined') {
            CKEDITOR.replace('content', {
                toolbar: [
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
                    { name: 'links', items: ['Link', 'Unlink'] },
                    { name: 'document', items: ['Source'] }
                ],
                height: 400
            });
        }

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
    });
</script>
@endpush