<?php

use App\vehiculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/home', function () {
    // return view('arrendatario.index');
});

Auth::routes();

Route::middleware('auth')->resource('propietarios', 'PropietarioController')->names('propietarios');
Route::middleware('auth')->resource('vehiculos', 'vehiculoController')->names('vehiculos');
Route::get('/test',  function () {
    return vehiculo::with('propietario:id,full_name')->get(['*']);
});
