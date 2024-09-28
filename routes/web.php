<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Register Route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//City Route
Route::get('/get-cities/{state_id}', [RegisterController::class, 'getCities']);

//Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

//Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');