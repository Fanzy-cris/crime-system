<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile.index');
    }
    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nameUser' => ['required', 'string', 'max:255'],
            'surNameUser' => ['required', 'string', 'max:255'],
            'phoneUser' => ['required', 'regex:/^[0-9\s\-\(\)]{7,10}$/', 'max:10'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::findOrFail($id);
        $user->nameUser = $request->input('nameUser');
        $user->surNameUser = $request->input('surNameUser');
        $user->phoneUser = $request->input('phoneUser');
        $user->password = Hash::make($request->password);

        $user->save();

        return Redirect::route('profile')->with('message', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy($id)
    {

        Auth::logout();

        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::to('/');
    }
}
