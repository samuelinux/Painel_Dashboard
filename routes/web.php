<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'] );
Route::get('/dashboard', [DashboardController::class, 'dashboard'] );
Route::get('/index', [DashboardController::class, 'dashboard'] );