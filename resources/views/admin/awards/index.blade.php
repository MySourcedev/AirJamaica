@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Awards Management</h1>
        @can('create', App\Models\Awards::class)
            <a href="{{ route('awards.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Create New Award
            </a>
        @endcan
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">All Awards</h5>
                <span class="badge bg-primary">{{ $awards->total() }} awards</span>
            </div>
        </div>

        <div class="card-body p-0">
            @if($awards->isEmpty())
                <div class="p-4 text-center text-muted">
                    <i class="fas fa-trophy fa-3x mb-3"></i>
                    <p class="h5">No awards found</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">Name</th>
                                <th width="30%">Description</th>
                                <th width="15%">Image</th>
                                <th width="15%">Recipients</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($awards as $award)
                                <tr>
                                    <td>{{ $award->id }}</td>
                                    <td>
                                        <strong>{{ $award->name }}</strong>
                                    </td>
                                    <td>{{ $award->description ?? 'No description' }}</td>
                                    <td>
                                        @if($award->image_path)
                                            <img src="{{ asset('storage/' . $award->image_path) }}" 
                                                 alt="{{ $award->name }}" 
                                                 class="img-thumbnail" 
                                                 style="max-width: 80px; max-height: 80px;">
                                        @else
                                            <span class="text-muted">No image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-info">
                                            {{ $award->users_count ?? $award->users->count() }} recipients
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('awards.show', $award) }}" 
                                               class="btn btn-sm btn-info" 
                                               title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            
                                            @can('update', $award)
                                                <a href="{{ route('awards.edit', $award) }}" 
                                                   class="btn btn-sm btn-primary" 
                                                   title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @endcan
                                            
                                            @can('delete', $award)
                                                <form action="{{ route('awards.destroy', $award) }}" 
                                                      method="POST" 
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger" 
                                                            title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this award?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        @if($awards->hasPages())
            <div class="card-footer">
                {{ $awards->links() }}
            </div>
        @endif
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
    .table-responsive {
        overflow-x: auto;
    }
    .gap-2 {
        gap: 0.5rem;
    }
</style>
@endpush