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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments', [\App\Http\Controllers\CommentController::class, 'index']);

Route::get('/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'show']);

Route::get('/comments/create/comment', [\App\Http\Controllers\CommentController::class, 'create']);

Route::post('/comments/create/comment', [\App\Http\Controllers\CommentController::class, 'store']);

Route::get('/comments/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'edit']);

Route::put('/comments/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'update']);

Route::delete('/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'destroy']);