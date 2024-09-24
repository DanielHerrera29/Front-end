<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EncuestaController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/registrate', function () {
    return view('registrate');
})->name('register');

Route::get('/reservas', function () {
    return view('reservas');
})->name('reservas');

Route::get('/gestionarvuelos', function () {
    return view('gestionarvuelos');
})->name('gestionarvuelos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('usuarios', UsuarioController::class);
Route::resource('encuestas', EncuestaController::class);
