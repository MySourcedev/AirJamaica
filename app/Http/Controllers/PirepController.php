<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Pirep;
use App\Models\Flights;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aircraft;
use App\Models\Airline;
use Exception;

class PirepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $this->authorize("isLoggedIn", User::class);
        } catch (Exception $e) {
            return redirect()->route('reqlogin')->with('error', $e->getMessage());
        }

        $pireps = Pirep::where('user_id','=',Auth::user()->id)->paginate(10);
        return view("admin.pireps", compact("pireps"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->authorize("isLoggedIn", User::class);
        }catch(Exception $e) {
            return redirect()->route('reqlogin')->with('error', $e->getMessage());
        }
        $validated = $request->validate([
            "airline"=> "required",
            "dpt_airport" => "required",
            "arr_airport" => "required",
            "flight_number" => "required",
            "flight_time" => "required",
            "fuel_lbs" => "required",
            "flight_route" => "nullable",

        ]);

        $validated["user_id"] = Auth::user()->id;
        Flights::create($validated);
        return redirect()->route("profile")->with("success", "You have successfully filed a pilot report");
    }
    public function create(){

        try {
            $this->authorize("isLoggedIn", User::class);
        } catch (Exception $e) {
            return redirect()->route('reqlogin')->with('error', $e->getMessage());
        }

        $airports = Airport::all();
        $airlines = Airline::all();
        $aircrafts = Aircraft::all();

        return view("admin.filepireps", compact("airports","airlines","aircrafts"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pirep $pirep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pirep $pirep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pirep $pirep)
    {
        //
    }
}
