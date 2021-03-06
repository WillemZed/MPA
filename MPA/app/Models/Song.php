<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function playlist() {
        return $this->belongsToMany(Playlist::class)
        ->withPivot('playlist_id');
    }

}
