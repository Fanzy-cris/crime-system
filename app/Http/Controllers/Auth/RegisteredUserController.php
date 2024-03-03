<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PoliceStation;
use App\Models\User;
use App\models\Type;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use function PHPSTORM_META\type;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $Stations = PoliceStation::all();
        $Types = Type::all();

        return view('auth.register', compact('Types', 'Stations'));
        
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nameUser' => ['required', 'string', 'max:255'],
            'surNameUser' => ['required', 'string', 'max:255'],
            'phoneUser' => ['required', 'numeric'],
            'badgeNumUser' => ['required', 'string', 'max:255'],
            'TypeId' => ['required', 'integer', 'max:255'],
            'StationId' => ['required', 'integer', 'max:255'],
            'emailUser' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //dd($request->TypeId);
        $user = User::create([
            'nameUser' => $request->nameUser,
            'surNameUser' => $request->surNameUser,
            'phoneUser' => $request->phoneUser,
            'badgeNumUser' => $request->badgeNumUser,
            'Type_id' => $request->TypeId,
            'police_station_id' => $request->StationId,
            'emailUser' => $request->emailUser,
            'passwordUser' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
