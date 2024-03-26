<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TownController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PoliceStationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/show', [UserController::class, 'show'])->name('user.show');
    Route::patch('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/type', [TypeController::class, 'index'])->name('type');
    Route::get('/type/create', [TypeController::class, 'create'])->name('type.create');
    Route::post('/type', [TypeController::class, 'store'])->name('type.store');
    Route::get('/type/{id}/show', [TypeController::class, 'show'])->name('type.show');
    Route::get('/type/{id}/edit', [TypeController::class, 'edit'])->name('type.edit');
    Route::put('/type/{id}/update', [TypeController::class, 'update'])->name('type.update');
    Route::delete('/type/{id}/destroy', [TypeController::class, 'destroy'])->name('type.destroy');

    Route::get('/town', [TownController::class, 'index'])->name('town');
    Route::get('/town/create', [TownController::class, 'create'])->name('town.create');
    Route::post('/town', [TownController::class, 'store'])->name('town.store');
    Route::get('/town/{id}/show', [TownController::class, 'show'])->name('town.show');
    Route::get('/town/{id}/edit', [TownController::class, 'edit'])->name('town.edit');
    Route::put('/town/{id}/update', [TownController::class, 'update'])->name('town.update');
    Route::delete('/town/{id}/destroy', [TownController::class, 'destroy'])->name('town.destroy');

    Route::get('/policeStation', [PoliceStationController::class, 'index'])->name('station');
    Route::get('/policeStation/create', [PoliceStationController::class, 'create'])->name('station.create');
    Route::post('/policeStation', [PoliceStationController::class, 'store'])->name('station.store');
    Route::get('/policeStation/{id}/show', [PoliceStationController::class, 'show'])->name('station.show');
    Route::get('/policeStation/{id}/edit', [PoliceStationController::class, 'edit'])->name('station.edit');
    Route::put('/policeStation/{id}/update', [PoliceStationController::class, 'update'])->name('station.update');
    Route::delete('/policeStation/{id}/destroy', [PoliceStationController::class, 'destroy'])->name('station.destroy');

    Route::get('/complaint', [ComplaintController::class, 'index'])->name('complaint');
    Route::get('/complaint/create', [ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/complaint/{id}/show', [ComplaintController::class, 'show'])->name('complaint.show');
    Route::get('/complaint/{id}/edit', [ComplaintController::class, 'edit'])->name('complaint.edit');
    Route::put('/complaint/{id}/update', [ComplaintController::class, 'update'])->name('complaint.update');
    Route::delete('/complaint/{id}/destroy', [ComplaintController::class, 'destroy'])->name('complaint.destroy');
});

require __DIR__.'/auth.php';
