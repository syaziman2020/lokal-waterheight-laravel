<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/s1', [DashboardController::class, 'getLatestS1']);
Route::get('/s2', [DashboardController::class, 'getLatestS2']);
