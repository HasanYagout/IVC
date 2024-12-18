<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/services', [\App\Http\Controllers\HomeController::class,'service'])->name('service');
Route::post('/language', [\App\Http\Controllers\HomeController::class,'language'])->name('language');
