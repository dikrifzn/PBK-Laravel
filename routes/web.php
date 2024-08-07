<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

// Route::get('/', function () {
//     return view('hello');
// });

Route::resource("/dosen", DosenController::class);