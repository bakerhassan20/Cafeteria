<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;




Auth::routes(['verify'=>true]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','verified');
