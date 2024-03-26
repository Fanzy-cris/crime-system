<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use Illuminate\Support\Facades\Auth;

class TownController extends Controller
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
            $towns = Town::all();

            return view('towns.index', compact('towns'));  
            
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
            return view('towns.create'); 
            
        }
        return view('error.index');

        
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
            
            $request->validate([
                'townName' => 'required|string|max:255',
            ]);
    
            $town = new Town();
            $town->townName = $request->input('townName');
            $town->save();
    
            return redirect()->route('towns.index');  
        }
        return view('error.index');

        
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
            
            $town = Town::findOrFail($id);

            return view('towns.show', compact('town')); 
        }
        return view('error.index');

        
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
            
            $town = Town::findOrFail($id);

            return view('towns.edit', compact('town')); 
        }
        return view('error.index');

        
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
            
            $request->validate([
                'townName' => 'required|string|max:255',
            ]);
    
            $town = Town::findOrFail($id);
            $town->townName = $request->input('townName');
            $town->save();
    
            return redirect()->route('towns.index');
            
        }
        return view('error.index');

        
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

            $town = Town::findOrFail($id);
            $town->delete();
    
            return redirect()->route('towns.index');  
            
        }
        return view('error.index');

        
    }

    private function checkIfAdmin()
    {
        if (auth()->user()->type->nameType == "admin") {
            return true;
        }
        return false;
    }
}
