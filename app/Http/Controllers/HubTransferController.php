<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Hub;
use App\Models\HubTransfer;
use Illuminate\Http\Request;

class HubTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hub_transfer = HubTransfer::orderBy("created_at","desc")->paginate(10);
        return view("admin.hubtransfer.index", compact("hub_transfer"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "desired_hub" => "required",
            "reason"=> "reason",
        ]);
        HubTransfer::create($validated);
        return redirect()->route("profile")->with("success","You have successfully changed your hub");
    }

    /**
     * Display the specified resource.
     */
    public function show(HubTransfer $hub_transfer)
    {
        return view("admin.hubtransfer.show", compact("hub_transfer"));
    }
    public function create(Request $request){
        $hubs = Airport::all();
        return view("profile.hubtransfer", compact("hubs"));
    }
}
