@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Flight Schedule</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($schedules) ? route('schedules.update', $schedule->id) : route('schedules.store') }}">
                        @csrf
                        @if (isset($schedules))
                        @method('PUT')
                        @endif

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Airline*</label>
                                <select name="airline_id" class="form-select @error('airline_id') is-invalid @enderror" required>
                                    <option value="">Select Airline</option>
                                    @foreach($airlines as $airline)
                                        <option value="{{ $airline->id }}" 
                                            @selected(old('airline_id', $schedule->airline_id) == $airline->id)>
                                            {{ $airline->name }} ({{ $airline->ICAO_code }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('airline_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Flight Number*</label>
                                <input type="text" name="flight_number" 
                                       class="form-control @error('flight_number') is-invalid @enderror" 
                                       value="{{ old('flight_number', $schedule->flight_number) }}" required>
                                @error('flight_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Departure Airport*</label>
                                <select name="departure_airport_id" 
                                        class="form-select @error('departure_airport_id') is-invalid @enderror" required>
                                    <option value="">Select Airport</option>
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}" 
                                            @selected(old('departure_airport_id', $schedule->departure_airport_id) == $airport->id)>
                                            {{ $airport->name }} ({{ $airport->ICAO_code }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('departure_airport_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Arrival Airport*</label>
                                <select name="arrival_airport_id" 
                                        class="form-select @error('arrival_airport_id') is-invalid @enderror" required>
                                    <option value="">Select Airport</option>
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}" 
                                            @selected(old('arrival_airport_id', $schedule->arrival_airport_id) == $airport->id)>
                                            {{ $airport->name }} ({{ $airport->ICAO_code }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('arrival_airport_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Aircraft*</label>
                                <select name="aircraft_id" class="form-select @error('aircraft_id') is-invalid @enderror" required>
                                    <option value="">Select Aircraft</option>
                                    @foreach($aircrafts as $aircraft)
                                        <option value="{{ $aircraft->id }}" 
                                            @selected(old('aircraft_id', $schedule->aircraft_id) == $aircraft->id)>
                                            {{ $aircraft->model }} ({{ $aircraft->registration }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('aircraft_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Days of Week*</label>
                                <div class="d-flex flex-wrap gap-2">
                                    @php
                                        $days = [
                                            ['value' => '0', 'label' => 'Sun'],
                                            ['value' => '1', 'label' => 'Mon'],
                                            ['value' => '2', 'label' => 'Tue'],
                                            ['value' => '3', 'label' => 'Wed'],
                                            ['value' => '4', 'label' => 'Thu'],
                                            ['value' => '5', 'label' => 'Fri'],
                                            ['value' => '6', 'label' => 'Sat']
                                        ];
                                        $activeDays = explode(',', old('days_of_week', $schedule->days_of_week));
                                    @endphp
                                    @foreach($days as $day)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" 
                                                   name="days_of_week[]" value="{{ $day['value'] }}" 
                                                   id="day{{ $day['value'] }}" @checked(in_array($day['value'], $activeDays))>
                                            <label class="form-check-label" for="day{{ $day['value'] }}">
                                                {{ $day['label'] }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('days_of_week')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">Departure Time*</label>
                                <input type="time" name="departure_time" 
                                       class="form-control @error('departure_time') is-invalid @enderror" 
                                       value="{{ old('departure_time', $schedule->departure_time) }}" required>
                                @error('departure_time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Arrival Time*</label>
                                <input type="time" name="arrival_time" 
                                       class="form-control @error('arrival_time') is-invalid @enderror" 
                                       value="{{ old('arrival_time', $schedule->arrival_time) }}" required>
                                @error('arrival_time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Start Date*</label>
                                <input type="date" name="start_date" 
                                       class="form-control @error('start_date') is-invalid @enderror" 
                                       value="{{ old('start_date', $schedule->start_date) }}" required>
                                @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">End Date</label>
                                <input type="date" name="end_date" 
                                       class="form-control @error('end_date') is-invalid @enderror" 
                                       value="{{ old('end_date', $schedule->end_date) }}">
                                @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="active" class="form-check-input" id="active" 
                                   @checked(old('active', $schedule->active))>
                            <label class="form-check-label" for="active">Active Schedule</label>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Update Schedule
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection