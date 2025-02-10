<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{dni}', [UsuariosController::class, 'mostrarInscripcion'])->name('mostrarInscripcion');
Route::get('/inicio', [UsuariosController::class, 'inicio'])->name('usuarios.inicio');
Route::get('/inicio/iniciarSesion', [UsuariosController::class, 'iniciarSesion'])->name('iniciarSesion');
Route::get('/inicio/registrarse', [UsuariosController::class, 'registrarse'])->name('registrarse');
