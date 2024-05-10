<?php

use App\Http\Controllers\{DashboardController, PerfilController, LoginController, RegistrarController, MemorandoController, OficioController};
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'] );
Route::get('/dashboard', [DashboardController::class, 'dashboard'] );
Route::get('/index', [DashboardController::class, 'dashboard'] );

Route::get('/login', [DashboardController::class, 'login'] );

Route::get('/perfil', [PerfilController::class, 'perfil'] );

Route::get('/login', [LoginController::class, 'login'] );

Route::get('/registrar', [RegistrarController::class, 'registrar'] );

Route::get('/memorando', [MemorandoController::class, 'memorando'] );

Route::get('/oficio', [OficioController::class, 'oficio'] );