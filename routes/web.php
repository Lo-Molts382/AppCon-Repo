<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* User-created Routes */

Route::get('posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('posts/create', [App\Http\Controllers\PostController::class, 'store']);
Route::get('posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::put('posts/{id}/edit', [App\Http\Controllers\PostController::class, 'update']);
Route::get('posts/{id}/delete', [App\Http\Controllers\PostController::class, 'destroy']);

Route::get('/index', function () {
    return view('frontend.index');
});

//

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
