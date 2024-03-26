<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use App\Models\PoliceStation;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer le nom de la station de police de l'utilisateur authentifié
        $nameStation = auth()->user()->policeStation->name;

        // Récupérer les plaintes en fonction du nom de la station
        $complaints = Complaints::whereHas('policeStation', function ($query) use ($nameStation) {
            $query->where('name', $nameStation);
        })->get();

        return view('complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policeStations = PoliceStation::all();

        return view('complaints.create', compact('policeStations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'police_station_id' => 'required|integer',
            'objectComplaints' => 'required|string|max:255',
            'contentComplaints' => 'required|string',
            'nameUserComplaint' => 'required|string|max:255',
            'userEmailComplaint' => 'required|email',
            'phoneNumComplain' => 'required|integer',
            'state' => 'required|integer',
        ]);

        $complaint = new Complaints();
        $complaint->police_station_id = $request->input('police_station_id');
        $complaint->objectComplaints = $request->input('objectComplaints');
        $complaint->contentComplaints = $request->input('contentComplaints');
        $complaint->nameUserComplaint = $request->input('nameUserComplaint');
        $complaint->userEmailComplaint = $request->input('userEmailComplaint');
        $complaint->phoneNumComplain = $request->input('phoneNumComplain');
        $complaint->state = $request->input('state');
        $complaint->save();

        return redirect()->route('complaints.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complaint = Complaints::findOrFail($id);

        return view('complaints.show', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaint = Complaints::findOrFail($id);
        $policeStations = PoliceStation::all();

        return view('complaints.edit', compact('complaint', 'policeStations'));
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
        $request->validate([
            'police_station_id' => 'required|integer',
            'objectComplaints' => 'required|string|max:255',
            'contentComplaints' => 'required|string',
            'nameUserComplaint' => 'required|string|max:255',
            'userEmailComplaint' => 'required|email',
            'phoneNumComplain' => 'required|integer',
            'state' => 'required|integer',
        ]);

        $complaint = Complaints::findOrFail($id);
        $complaint->police_station_id = $request->input('police_station_id');
        $complaint->objectComplaints = $request->input('objectComplaints');
        $complaint->contentComplaints = $request->input('contentComplaints');
        $complaint->nameUserComplaint = $request->input('nameUserComplaint');
        $complaint->userEmailComplaint = $request->input('userEmailComplaint');
        $complaint->phoneNumComplain = $request->input('phoneNumComplain');
        $complaint->state = $request->input('state');
        $complaint->save();

        return redirect()->route('complaints.index');
    }

    public function destroy($id)
    {
        $complaint = Complaints::findOrFail($id);
        $complaint->delete();

        return redirect()->route('complaints.index');
    }
}
