<?php

use App\Http\Controllers\GenreController;
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

    return view('index');
});

Route::get('genres', function () {
    return view('genres', [
        "genres" => Genre::all()
    ]);
});

Route::get('songs', function () {
    return view('songs', [
        "songs" => Song::all()
    ]);
});

Route::get('genres/{genres:slug}', function (Genre $genres) {
    return view('songs', [
        "songs" => $genres->songs
    ]);
});


Route::resource('genre', GenreController::class);

