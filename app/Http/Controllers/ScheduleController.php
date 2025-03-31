<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Aircraft;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Index - List all schedules
    public function index()
    {
        $schedules = Schedule::with(['airline', 'departureAirport', 'arrivalAirport', 'aircraft'])
                        ->orderBy('flight_number')
                        ->paginate(15);
        return view('admin.schedules.index', compact('schedules'));
    }

    // Show create form
    public function create()
    {
        $airlines = Airline::orderBy('name')->get();
        $airports = Airport::orderBy('name')->get();
        $aircrafts = Aircraft::orderBy('model')->get();
        
        return view('admin.schedules.create', compact('airlines', 'airports', 'aircrafts'));
    }

    // Store new schedule
    public function store(Request $request)
    {
        $validated = $request->validate([
            'airline_id' => 'required|exists:airlines,id',
            'flight_number' => 'required|string|max:10',
            'departure_airport_id' => 'required|exists:airports,id',
            'arrival_airport_id' => 'required|exists:airports,id|different:departure_airport_id',
            'aircraft_id' => 'required|exists:aircraft,id',
            'departure_time' => 'required|date_format:H:i',
            'arrival_time' => 'required|date_format:H:i|after:departure_time',
            'days_of_week' => 'required|array',
            'days_of_week.*' => 'in:0,1,2,3,4,5,6',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'active' => 'boolean'
        ]);

        $validated['days_of_week'] = implode(',', $request->days_of_week);
        $validated['active'] = $request->has('active');

        Schedule::create($validated);

        return redirect()->route('schedules.index')
                       ->with('success', 'Schedule created successfully');
    }

    // Show edit form
    public function edit(Schedule $schedule)
    {
        $airlines = Airline::orderBy('name')->get();
        $airports = Airport::orderBy('name')->get();
        $aircrafts = Aircraft::orderBy('model')->get();
        
        return view('admin.schedules.edit', compact('schedule', 'airlines', 'airports', 'aircrafts'));
    }

    // Update schedule
    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'airline_id' => 'required|exists:airlines,id',
            'flight_number' => 'required|string|max:10',
            'departure_airport_id' => 'required|exists:airports,id',
            'arrival_airport_id' => 'required|exists:airports,id|different:departure_airport_id',
            'aircraft_id' => 'required|exists:aircraft,id',
            'departure_time' => 'required|date_format:H:i',
            'arrival_time' => 'required|date_format:H:i|after:departure_time',
            'days_of_week' => 'required|array',
            'days_of_week.*' => 'in:0,1,2,3,4,5,6',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'active' => 'boolean'
        ]);

        $validated['days_of_week'] = implode(',', $request->days_of_week);
        $validated['active'] = $request->has('active');

        $schedule->update($validated);

        return redirect()->route('schedules.index')
                       ->with('success', 'Schedule updated successfully');
    }

    // Delete schedule
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')
                       ->with('success', 'Schedule deleted successfully');
    }
}