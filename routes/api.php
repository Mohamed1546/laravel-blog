<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/posts', API\PostController::class );
Route::get('/posts/{id}',[ API\PostController::class , 'show']);
Route::get('/posts/create',[ API\PostController::class , 'create']);
Route::post('/posts',[ API\PostController::class , 'store']);