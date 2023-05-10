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

Route::get('/comment', [\App\Http\Controllers\CommentController::class, 'index']);

Route::get('/comment/{comment}', [\App\Http\Controllers\CommentController::class, 'show']);

Route::get('/comment/create/comment', [\App\Http\Controllers\CommentController::class, 'create']);

Route::post('/comment/create/comment', [\App\Http\Controllers\CommentController::class, 'store']);

Route::get('/comment/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'edit']);

Route::put('/comment/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'update']);

Route::delete('/comment/{comment}', [\App\Http\Controllers\CommentController::class, 'destroy']);