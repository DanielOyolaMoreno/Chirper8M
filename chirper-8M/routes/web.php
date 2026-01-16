<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorController;
use App\Http\Controllers\MemeController;

Route::get('/', [MemeController::class, 'index']);
Route::post('/chirps8M', [MemeController::class, 'store']);