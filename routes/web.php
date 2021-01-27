<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\FeatureReqController;
use App\Http\Controllers\PostController;

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
})->name('landing.view');;

//Business user Register
Route::middleware(['guest'])->get('/register-business', function () {
    return view('auth.register-business');
})->name('register-business.view');

Route::middleware(['guest'])->post('/register-business', [RegisteredUserController::class, 'store'])->name('register-business.store');
//Business user register
//Home
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [PagesController::class, 'home'])->name('home.view');

//posts
Route::middleware(['auth:sanctum', 'verified'])->get('/allposts', [PostController::class, 'index'])->name('post.getall');
Route::middleware(['auth:sanctum', 'verified'])->post('/post', [PostController::class, 'store'])->name('post.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::middleware(['auth:sanctum', 'verified'])->put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::middleware(['auth:sanctum', 'verified'])->delete('/post/{id}', [PostController::class, 'delete'])->name('post.delete');

//Feature Requests
Route::middleware(['auth:sanctum', 'verified'])->post('/addReq', [FeatureReqController::class, 'store'])->name('feature.store');

//Dashboard (Business)
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [BusinessController::class, 'index'])->name('dashboard.view');

Route::middleware(['auth:sanctum', 'verified'])->get('/getinfo', function () {
    return view('info.phpinfo');
})->name('info.view');

// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');
