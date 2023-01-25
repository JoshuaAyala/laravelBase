<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/libros', [BookController::class, 'index']);
Route::get('/libros/{id}', [BookController::class, 'show']);
Route::post('/libros', [BookController::class, 'store']);
Route::put('/libros/{id}', [BookController::class, 'update']);
Route::delete('/libros/{id}', [BookController::class, 'destroy']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);
Route::post('/authors', [AuthorController::class, 'store']);