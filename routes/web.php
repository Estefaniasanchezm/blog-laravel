<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
});*/

Route::get('/dashboard', function () {
    // Only authenticated users may access this route...
})->middleware('auth');

Route::get('/posts/user', [PostController::class, 'user'])->name('posts.user');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/categoria/{categoria}', [PostController::class, 'categoria'])->name('posts.categoria');
