<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];


    public function songs() {
        return $this->belongsToMany(Song::class)
        ->withPivot('song_id');
    }


    // public function sumTime() {
    //     $songs = $this->songs();
    //     return true
    //     //dd($songs);
    // }
}
