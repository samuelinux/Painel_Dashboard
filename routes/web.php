<?php

use App\Http\Controllers\{DashboardController, PerfilController, LoginController, RegistrarController, MemorandoController, OficioController, RelatorioController};
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {

    Route::get('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

    Route::get('/registrar', [RegistrarController::class, 'registrar']);
});


Route::middleware(['auth'])->group(function () {

    Route::redirect('/', '/dashboard');

    Route::redirect('/index', '/dashboard');

    Route::redirect('/home', '/dashboard')->name('home');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('/memorando', MemorandoController::class);
   

    Route::get('/oficio', [OficioController::class, 'oficio']);

    Route::get('/perfil', [PerfilController::class, 'perfil']);

    Route::get('/relatorio', [RelatorioController::class, 'relatorio']);
});
