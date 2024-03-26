<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
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
            $types = Type::all();

            return view('admin.types.index', compact('types'));     
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
           
            return view('admin.types.create'); 
            
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
                'nameType' => 'required|string|max:254',
            ]);
    
            $type = new Type();
            $type->nameType = $request->input('nameType');
            $type->save();
    
            return redirect()->route('admin.types.index'); 
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
            $type = Type::findOrFail($id);

            return view('admin.types.show', compact('type'));  
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

            $type = Type::findOrFail($id);

            return view('admin.types.edit', compact('type')); 
            
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
                'nameType' => 'required|string|max:254',
            ]);
    
            $type = Type::findOrFail($id);
            $type->nameType = $request->input('nameType');
            $type->save();
    
            return redirect()->route('admin.types.index'); 
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

            $type = Type::findOrFail($id);
            $type->delete();
    
            return redirect()->route('admin.types.index');
            
        }
        return view('error.index');

        
    }

    private function checkIfAdmin()
    {
        if (auth()->user()->type->nameType == "Admin") {
            return true;
        }
        return false;
    }
}
