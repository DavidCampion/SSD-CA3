<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/feed', PostsController::class);


Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/confirmSent', [\App\Http\Controllers\ConfirmController::class, 'index']);

Route::get('/landing', [\App\Http\Controllers\LandingController::class, 'index']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

