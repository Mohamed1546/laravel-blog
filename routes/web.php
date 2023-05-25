<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ComputersController;
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
Route::resource('/computers', ComputersController::class); 
Route::get('/', [ComputersController::class, 'index'])->name('home.index');
Route::get('/about', [PagesController::class, 'index1'])->name('home.about');
Route::get('/contact', [PagesController::class, 'index2'])->name('home.contact'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
