<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use Illuminate\Http\Request;

class DashController extends Controller
{
    //
    public function index()
    {
        // Récupérer le nom de la station de police de l'utilisateur authentifié
        $idStation = auth()->user()->policeStation->id;
        if ($this->checkIfAdmin()) {
            $Ongoing = Complaints::all()->where('state',0)->count();
            $Actived = Complaints::all()->where('state',1)->count();

        }else{    
            $Ongoing = Complaints::where('police_station_id',$idStation)->where('state',0)->count();
            $Actived = Complaints::where('police_station_id',$idStation)->where('state',1)->count();
        }

        return view('dashboard', compact('Ongoing','Actived'));
    }

    private function checkIfAdmin()
    {
        if (auth()->user()->type->nameType == "Admin") {
            return true;
        }
        return false;
    }
}
