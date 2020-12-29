<?php

use App\Http\Controllers\PagesController;
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

Route::middleware(['guest'])->get('/', function () {
    return view('welcome');
});

//Business user Register
Route::middleware(['guest'])->get('/register-business', function () {
    return view('auth.register-business');
})->name('register-business');

Route::middleware(['guest'])->post('/register-business', [RegisteredUserController::class, 'store']);
//Business user register

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [PagesController::class, 'home'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/allposts', [PostController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->post('/post', [PostController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/post/{id}', [PostController::class, 'show']);
Route::middleware(['auth:sanctum', 'verified'])->put('/post/{id}',[PostController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/post/{id}', [PostController::class, 'delete']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');
