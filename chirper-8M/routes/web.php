<?php

use App\Http\Controllers\MemeController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Route;

// Ruta pública (todos pueden verla)
Route::get('/', [MemeController::class, 'index']);

// Rutas protegidas (solo usuarios autenticados)
Route::middleware('auth')->group(function () {
	Route::post('/chirps8M', [MemeController::class, 'guardar']);
	Route::get('/chirps8M/{chirp}/edit', [MemeController::class, 'editarForm']);
	Route::put('/chirps8M/{chirp}', [MemeController::class, 'editar']);
	Route::delete('/chirps8M/{chirp}', [MemeController::class, 'eliminar']);
});

// Rutas para invitados (guest middleware)
Route::view('/register', 'auth.register')
	->middleware('guest')
	->name('register');

Route::post('/register', Register::class)
	->middleware('guest');

// Login routes
Route::view('/login', 'auth.login')
	->middleware('guest')
	->name('login');

Route::post('/login', Login::class)
	->middleware('guest');

// Logout
Route::post('/logout', function () {
	auth()->logout();
	request()->session()->invalidate();
	request()->session()->regenerateToken();
	return redirect('/');
})->middleware('auth');
