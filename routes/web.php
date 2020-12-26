<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Business user Register
Route::middleware(['guest'])->get('/register-business', function () {
    return view('auth.register-business');
})->name('register-business');

Route::middleware(['guest'])->post('/resgister-business', [RegisteredUserController::class, 'store']);
//Business user register

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');
