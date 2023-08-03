<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('players', PlayersController::class);
//profile
Route::resource('profiles', ProfileController::class);

//Patients
Route::resource('patients', PatientsController::class);
