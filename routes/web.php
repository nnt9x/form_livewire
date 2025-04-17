<?php

use App\Http\Controllers\ProductLineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productLines', [ProductLineController::class, 'index']);
