<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('json')->resource('propietarios', 'PropietarioController')->names('propietarios');
Route::middleware('json')->resource('vehiculos', 'VehiculoController')->names('vehiculos');
