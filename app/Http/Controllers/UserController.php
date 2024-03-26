<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('policeStation', 'type')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policeStations = \App\Models\PoliceStation::all();
        $types = \App\Models\Type::all();

        return view('users.create', compact('policeStations', 'types'));
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
            'type_id' => 'required|integer',
            'nameUser' => 'required|string|max:255',
            'surNameUser' => 'required|string|max:255',
            'phoneUSer' => 'required|integer',
            'badgeNumUser' => 'required|integer',
            'password' => 'required|string|min:8',
            'emailUser' => 'required|email|unique:users',
        ]);

        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('policeStation', 'type')->findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'nameUser' => $user->nameUser,
            'surNameUser' => $user->surNameUser,
            'phoneUSer' => $user->phoneUSer,
            'badgeNumUser' => $user->badgeNumUser,
            'emailUser' => $user->emailUser,
            'policeStation' => $user->policeStation,
            'type' => $user->type,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $policeStations = \App\Models\PoliceStation::all();
        $types = \App\Models\Type::all();

        return view('users.edit', compact('user', 'policeStations', 'types'));
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
            'type_id' => 'required|integer',
            'nameUser' => 'required|string|max:255',
            'surNameUser' => 'required|string|max:255',
            'phoneUSer' => 'required|integer',
            'badgeNumUser' => 'required|integer',
            'password' => 'nullable|string|min:8',
            'emailUser' => 'required|email|unique:users,emailUser,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->fill($request->all());
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('users.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }


}
