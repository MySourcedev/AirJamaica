@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Airports Management</h1>
        <a href="{{ route('airports.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New Airport
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ICAO</th>
                        <th>IATA</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Coordinates</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($airports as $airport)
                    <tr>
                        <td>{{ $airport->ICAO_code }}</td>
                        <td>{{ $airport->IATA_code }}</td>
                        <td>{{ $airport->name }}</td>
                        <td>{{ $airport->city }}, {{ $airport->country }}</td>
                        <td>{{ $airport->latitude }}, {{ $airport->longitude }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('airports.edit', $airport->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('airports.destroy', $airport->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this airport?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $airports->links() }}
        </div>
    </div>
</div>
@endsection