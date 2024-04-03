<?php

namespace App\Http\Controllers;

use App\Mail\ComplaintNotificationReject;
use App\Models\Complaints;
use Illuminate\Http\Request;
use App\Models\PoliceStation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComplaintNotificationValide;

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
        $idStation = auth()->user()->policeStation->id;
        if ($this->checkIfAdmin()) {
            $complaints = Complaints::orderBy('state','asc')->paginate(10);
        }else{    
            $complaints = Complaints::where('police_station_id',$idStation)->orderBy('state','asc')->paginate(10);
        }

        return view('admin.complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policeStations = PoliceStation::where('stationName','!=','Admin')->with('town')->get();
        return view('home.register_complaint', compact('policeStations'));
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
            'phoneNumComplain' => 'required|regex:/^[0-9\s\-\(\)]{7,10}$/|max:10',
        ]);

        $complaint = new Complaints();
        $complaint->police_station_id = $request->input('police_station_id');
        $complaint->objectComplaints = $request->input('objectComplaints');
        $complaint->contentComplaints = $request->input('contentComplaints');
        $complaint->nameUserComplaints = $request->input('nameUserComplaints');
        $complaint->userEmailComplaints = $request->input('userEmailComplaints');
        $complaint->userNumComplaints = $request->input('userNumComplaints');
        $complaint->save();

        return redirect()->route('complaint.create')->with('message', 'Success');
    
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

        return view('admin.complaints.show', compact('complaint'));
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
            'state' => 'required|integer|in:0,1',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
        ]);

        $complaint = Complaints::findOrFail($id);
       
        if ($request->input('state') == 1) {

            $complaint->state = $request->input('state');
            $complaint->save();

            // Envoi de l'e-mail à l'utilisateur
            $datetime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('datetime'))->format('d/m/Y H:i');
            Mail::to($complaint->userEmailComplaints)->send(new ComplaintNotificationValide($complaint, $datetime));

        }elseif ($request->input('state') == 0) {
            Mail::to($complaint->userEmailComplaints)->send(new ComplaintNotificationReject($complaint));
            $complaint->delete();
        }

        return redirect()->route('complaint')->with('message', 'Success');
    }

    public function destroy($id)
    {
        $complaint = Complaints::findOrFail($id);
        $complaint->delete();

        return redirect()->route('complaint')->with('message', 'Success');
    }

    private function checkIfAdmin()
    {
        if (auth()->user()->type->nameType == "Admin") {
            return true;
        }
        return false;
    }
}
