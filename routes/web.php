<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*Route::get('/', function () {
    dump(\App\Models\User::all());
});*/

/*Route::get('/', function () {
    return view('list');
});*/

Route::get('/', [App\Http\Controllers\PostController::class, 'list']);

Route::post('/create', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/create', [App\Http\Controllers\PostController::class, 'create']);

Route::post('/posts/{post}', [App\Http\Controllers\PostController::class, 'update']);
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'edit']);

Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy']);

Route::get('/test', function () {
    return view('landing');
});