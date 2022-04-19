<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function playlist_song()
    {
        return $this->hasMany(Playlist_song::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

}
