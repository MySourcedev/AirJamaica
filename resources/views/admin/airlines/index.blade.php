@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Airlines Management</h1>
        <a href="{{ route('airlines.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New Airline
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
                        <th>Callsign</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($airlines as $airline)
                    <tr>
                        <td>{{ $airline->ICAO_code }}</td>
                        <td>{{ $airline->IATA_code }}</td>
                        <td>{{ $airline->name }}</td>
                        <td>{{ $airline->callsign }}</td>
                        <td>{{ $airline->country }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('airlines.edit', $airline->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('airlines.destroy', $airline->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this airline?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $airlines->links() }}
        </div>
    </div>
</div>
@endsection