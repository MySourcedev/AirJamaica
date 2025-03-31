<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Aircraft Management</h1>
        <a href="{{ route('aircraft.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New Aircraft
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ICAO Code</th>
                            <th>Model</th>
                            <th>Registration</th>
                            <th>Max Passengers</th>
                            <th>Max Cargo (lbs)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($aircrafts as $aircraft)
                        <tr>
                            <td>{{ $aircraft->ICAO_code }}</td>
                            <td>{{ $aircraft->model }}</td>
                            <td>{{ $aircraft->registration }}</td>
                            <td>{{ $aircraft->max_pax }}</td>
                            <td>{{ $aircraft->max_cargo }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('aircraft.edit', $aircraft->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('aircraft.destroy', $aircraft->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this aircraft?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No aircraft found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($aircrafts->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $aircrafts->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>

