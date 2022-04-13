<?php

namespace Database\Seeders;

use App\Models\Playlist_song;
use Illuminate\Database\Seeder;

class PlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 1;
        $playlistSong->song_id = 1;
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 2;
        $playlistSong->song_id = 2;
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 3;
        $playlistSong->song_id = 3;
        $playlistSong->save();
    }
}
