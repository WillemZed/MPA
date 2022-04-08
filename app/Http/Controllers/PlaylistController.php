<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\SessionPlaylist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::with('songs')->get();
        //dd($playlists[0]->songs[0]->getOriginal('pivot_song_id'));
        //dd($playlists);
        //$pl = Playlist::find($playlist);
        //dd($pl);
        //dd($playlist->Song()->get());
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('hi');
        //$playlist = Playlist::with('songs')->find($id)->songs();

        //dd($playlist);
        //return redirect('playlist')->with('status', 'playlist deleted');
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
}
