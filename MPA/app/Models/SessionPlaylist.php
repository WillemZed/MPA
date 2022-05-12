<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class SessionPlaylist extends Model
{
    use HasFactory;
    private $items = Array();

    function __construct()
    {
        if (! Session::exists('playlist')) {
            // if there is no current 'playlist' item in the session, create one
            Session::put('playlist', $this->items);
            $this->saveToSession();
        } else {
            // retrieve existing session
            $this->items = Session::get('playlist');
            $this->saveToSession();
        }
    }
    public function AddSongToPlaylist($id) {
        $this->items[] = $id;
        //array_push($this->items, $id);
        $this->saveToSession();

    }
    public function saveToSession() {
        $currentSession = $this->items;
        $newSession = array_unique($currentSession);
        if(count($currentSession) != count($newSession)) {
            return redirect("/songs")->with("status", "Cannot have duplicate entries");
        } else {
            Session::put('playlist', $newSession);
            Session::save();        // when using dd, session is not saved, therefore this manual save
        }
        }

    public function getAll() {
        return $this->items;
    }

    public function deleteAll() {
        $this->items = [];
        $this->saveToSession();

        return redirect('playlist/create');
    }


    public function getCount() {
        return count($this->items);
    }
    public function getAllSessions() {
        $sessionCount = $this->getAll();
        $songs = [];
        //makes function that returns all songs in the session
        foreach ($sessionCount as $song) {
            $songs[] = Song::find($song);
        }
        return $songs;
    }

    public function checkDuplicateInSession() {

    }

}
