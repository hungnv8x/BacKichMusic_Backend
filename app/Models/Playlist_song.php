<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist_song extends Model
{
    use HasFactory;
    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
