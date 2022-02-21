<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/', [HomeController::class, 'index']);

// Category
Route::prefix('/category')->group(function(){
    Route::get('/marble', [ProductController::class, 'marble']);
    Route::get('/kid', [ProductController::class, 'kid']);
    Route::get('/book', [ProductController::class, 'book']);
    Route::get('/song', [ProductController::class, 'song']);
});

// News
Route::get('/news',[NewsController::class, 'news']);
Route::get('/news/{show}',[NewsController::class, 'show']);

// Program
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

// About
Route::get('/about', [AboutController::class, 'index']);


// Contact
Route::resource('/contact', ContactController::class)->only(['index']);
