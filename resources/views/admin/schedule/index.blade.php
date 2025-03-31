@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Flight Schedules</h1>
        <a href="{{ route('schedules.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New Schedule
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Flight #</th>
                            <th>Airline</th>
                            <th>Route</th>
                            <th>Aircraft</th>
                            <th>Times</th>
                            <th>Days</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->airline->ICAO_code }}{{ $schedule->flight_number }}</td>
                            <td>{{ $schedule->airline->name }}</td>
                            <td>
                                {{ $schedule->departureAirport->ICAO_code }} → 
                                {{ $schedule->arrivalAirport->ICAO_code }}
                            </td>
                            <td>{{ $schedule->aircraft->model }}</td>
                            <td>
                                {{ $schedule->departure_time }} - {{ $schedule->arrival_time }}
                            </td>
                            <td>
                                @php
                                    $daysMap = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                                    $activeDays = explode(',', $schedule->days_of_week);
                                    $displayDays = array_map(function($day) use ($daysMap) {
                                        return $daysMap[$day];
                                    }, $activeDays);
                                @endphp
                                {{ implode(', ', $displayDays) }}
                            </td>
                            <td>
                                <span class="badge bg-{{ $schedule->active ? 'success' : 'secondary' }}">
                                    {{ $schedule->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('schedules.edit', $schedule->id) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Delete this schedule?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $schedules->links() }}
            </div>
        </div>
    </div>
</div>
@endsection