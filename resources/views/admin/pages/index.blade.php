@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Manage Pages</h1>
        <a href="#" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create Page
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">All Pages</h6>
            <div>
                <a href="{{ route('pages.trash') }}" class="btn btn-sm btn-outline-danger">
                    <i class="fas fa-trash"></i> Trash
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>In Menu</th>
                            <th>Last Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>/{{ $page->slug }}</td>
                                <td>
                                    <span class="badge badge-{{ $page->is_published ? 'success' : 'warning' }}">
                                        {{ $page->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </td>
                                <td>
                                    @if($page->in_menu)
                                        <span class="badge badge-info">
                                            {{ $page->menu_title ?: $page->title }}
                                        </span>
                                    @else
                                        <span class="text-muted">No</span>
                                    @endif
                                </td>
                                <td>{{ $page->updated_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('pages.edit', $page) }}" 
                                           class="btn btn-sm btn-primary"
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('pages.destroy', $page) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-danger"
                                                    title="Move to Trash"
                                                    onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fas fa-file-alt fa-3x mb-3"></i>
                                    <p class="h5">No pages found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($pages->hasPages())
                <div class="card-footer">
                    {{ $pages->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection