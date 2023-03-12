<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SimilarController;
use App\Http\Controllers\CommentController;

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

//Route::post('register');
//Route::post('login');
//Route::post('logout');

Route::prefix('user')->name('user.')->group(function () {
    Route::get('{id}', [UserController::class, 'show'])->name('profile');
    Route::patch('{id}', [UserController::class, 'update'])->name('update');
});

Route::prefix('films')->name('films.')->group(function () {
    Route::get('/', [FilmController::class, 'index'])->name('list');
    Route::get('{id}', [FilmController::class, 'show'])->name('show');
    Route::post('add', [FilmController::class, 'add'])->name('add');
    Route::patch('{id}', [FilmController::class, 'update'])->name('update');
});

Route::prefix('genre')->name('genre.')->group(function () {
    Route::get('/', [GenreController::class, 'index'])->name('list');
    Route::patch('{id}', [GenreController::class, 'update'])->name('update');
});

/* Favorite */
Route::get('favorite', [FavoriteController::class, 'index'])->name('favorite.list');
Route::post('films/{id}/favorite', [FavoriteController::class, 'add'])->name('favorite.add');
Route::delete('films/{id}/favorite', [FavoriteController::class, 'delete'])->name('favorite.delete');

/* Similar */
Route::get('films/{id}/similar', [SimilarController::class, 'index'])->name('similar.list');

/* Comments */
Route::get('films/{id}/comments', [CommentController::class, 'index'])->name('comments.list');
Route::post('films/{id}/comments', [CommentController::class, 'add'])->name('comments.add');
Route::patch('films/{add}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('comments/{comment}', [CommentController::class, 'delete'])->name('comments.delete');


Route::prefix('promo')->group(function () {
    Route::get('/', [PromoController::class, 'index'])->name('promo');
    Route::get('{id}', [PromoController::class, 'add'])->name('promo.add');
});
