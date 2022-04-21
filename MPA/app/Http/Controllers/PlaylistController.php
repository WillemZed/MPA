<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\PlaylistSong as ModelsPlaylistSong;
use App\Models\SessionPlaylist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use PlaylistSong;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::withSum('songs', 'duration')->get();
        //$playlists = Playlist::withSum('songs', 'playlist_song.duration')->get();
        //dd($playlists);
        return view('playlists', [
            'playlists' => $playlists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playlist-crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sp = new SessionPlaylist();
        $songs = $sp->getAllSessions();


        $newPlaylist = Playlist::create($request->all());
        //store everything from the session into the playlist
        foreach ($songs as $song) {
            $newPlaylist->songs()->attach($song->id);
        }

        $sp->deleteAll();
        return redirect('playlist')->with('status', 'new playlist created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        return view('playlists', [
            'playlist' => $playlist,
            // 'sessionList' => $session
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playlist = Playlist::find($id);

        return view('playlist-crud.update', [
            'edit' => $playlist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $playlist = Playlist::find($id);
        $playlist->update([
            'name' => request('name'),
        ]);


        return redirect('playlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($playlist_id, $song_id) {
        $playlist = Playlist::find($playlist_id);
        $playlist->songs()->detach($song_id);
        return redirect('playlist')->with('status', 'song removed');
    }

    public function addSongToSession($id) {
        $sp = new SessionPlaylist();
        $sp->AddSongToPlaylist($id);

        return redirect('songs');
    }

    public function createPlaylist() {
        $sp = new SessionPlaylist();
        $songs = $sp->getAllSessions();

        //$sp->deleteAll();
        return view('playlist-crud.create', [
            'songs' => $songs
        ]);
    }

    public function add($id) {
        $playlist = Playlist::find($id);
        //dd($playlist);
        return view('playlist-crud.add',[
            'playlist' => $playlist
            ,'songs' => Song::all()
        ]);
    }

    public function addSong($id) {
        $newSong = request('songs');
        $playlist = Playlist::find($id);
        $playlist->songs()->attach($newSong);
        return redirect('playlist');
    }
}
