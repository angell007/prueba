<?php

use App\vehiculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/test',  'home');

Auth::routes();

Route::middleware('auth')->resource('propietarios', 'PropietarioController')->except('store', 'update', 'destroy')->names('propietarios');
Route::middleware('auth')->resource('vehiculos', 'VehiculoController')->except('store', 'update', 'destroy')->names('vehiculos');

// [
//     ["2018-12-01", "AM","​ID123", "5000"​]
//     ["2018-12-01", "AM","​ID545", "7000"​]
//     ["2018-12-01", "PM","​ID545", "3000"​]
//     ["2018-12-02", "AM","​ID545", "7000"​]
//     ]
