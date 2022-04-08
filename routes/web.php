<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('genres', [GenreController::class, 'show'])->name('genres');

Route::get('playlist', [PlaylistController::class, 'index'])->name('playlist');
Route::get('playlist/create', [PlaylistController::class, 'createPlaylist'])->name('playlist.create');
Route::post('playlist/store', [PlaylistController::class, 'store']);
Route::delete('playlist/delete/{playlist}', [PlaylistController::class, 'destroy']);
Route::get('songs', [SongController::class, 'index'])->name('songs');

Route::get('artist/{artist:slug}', [ArtistController::class, 'show']);

Route::get('song/details/{songs:slug}', [SongController::class, 'show']);

Route::get('genres/{genres:slug}', [GenreController::class, 'showSongs']);

Route::get('genre/edit/{genres:slug}', [GenreController::class, 'edit']);
Route::get('song/details/{song:slug}/edit', [SongController::class, 'edit']);


Route::put('song/details/{song:slug}/edit/{edit}', [SongController::class, 'update']);
Route::delete('song/details/delete/{song}', [SongController::class, 'destroy']);

Route::get('song/session/store/{song}', [PlaylistController::class, 'addSongToSession']);
Route::get('song/session/save', [PlaylistController::class, 'createPlaylist']);
//Route::resource('genre', GenreController::class);


