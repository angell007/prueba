<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->resource('propietarios', 'PropietarioController')->names('propietarios');
Route::middleware('auth')->resource('vehiculos', 'vehiculoController')->names('vehiculos');
