<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliceStation;
use App\Models\Town;

class PoliceStationController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($this->checkIfAdmin()) {
 
            $policeStations = PoliceStation::with('town')->get();
            return view('police_stations.index', compact('policeStations')); 

        }
        return view('error.index');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');
        $towns = Town::all();

        return view('police_stations.create', compact('towns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');
        
        $request->validate([
            'town_id' => 'required|integer',
            'stationName' => 'required|string|max:255',
            'stationLongitude' => 'required|numeric',
            'stationLatitude' => 'required|numeric',
        ]);

        $policeStation = new PoliceStation();
        $policeStation->town_id = $request->input('town_id');
        $policeStation->stationName = $request->input('stationName');
        $policeStation->stationLongitude = $request->input('stationLongitude');
        $policeStation->stationLatitude = $request->input('stationLatitude');
        $policeStation->save();

        return redirect()->route('police_stations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');

        $policeStation = PoliceStation::findOrFail($id);

        return view('police_stations.show', compact('policeStation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');

        $policeStation = PoliceStation::findOrFail($id);
        $towns = Town::all();

        return view('police_stations.edit', compact('policeStation', 'towns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');

        $request->validate([
            'town_id' => 'required|integer',
            'stationName' => 'required|string|max:255',
            'stationLongitude' => 'required|numeric',
            'stationLatitude' => 'required|numeric',
        ]);

        $policeStation = PoliceStation::findOrFail($id);
        $policeStation->town_id = $request->input('town_id');
        $policeStation->stationName = $request->input('stationName');
        $policeStation->stationLongitude = $request->input('stationLongitude');
        $policeStation->stationLatitude = $request->input('stationLatitude');
        $policeStation->save();

        return redirect()->route('police_stations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->checkIfAdmin()) {
            
            
        }
        return view('error.index');
        
        $policeStation = PoliceStation::findOrFail($id);
        $policeStation->delete();

        return redirect()->route('police_stations.index');
    }

    private function checkIfAdmin()
    {
        if (auth()->user()->type->nameType == "admin") {
            return true;
        }
        return false;
    }
}