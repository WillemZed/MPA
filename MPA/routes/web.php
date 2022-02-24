<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

use App\Models\Artist;
use App\Models\Genre;
use app\Models\Playlist;
use App\Models\Song;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
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

Route::get('/', [GenreController::class, 'index']);

Route::get('genres', [GenreController::class, 'show']);

Route::get('songs', [SongController::class, 'index']);

Route::get('artist/{artist:slug}', [ArtistController::class, 'show']);

Route::get('song/details/{songs:slug}', [SongController::class, 'show']);

Route::get('genres/{genres:slug}', [GenreController::class, 'showSongs']);

Route::get('genre/edit/{genres:slug}', [GenreController::class, 'edit']);
Route::get('song/details/{song:slug}/edit', [SongController::class, 'edit']);


Route::put('song/details/{song:slug}/edit/{edit}', [SongController::class, 'update']);
Route::delete('song/details/delete/{song}', [SongController::class, 'destroy']);

//Route::resource('genre', GenreController::class);



