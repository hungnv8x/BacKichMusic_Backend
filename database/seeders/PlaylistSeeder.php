<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlist = new Playlist();
        $playlist->user_id = '1';
        $playlist->name = 'Nhac Tre';
        $playlist->save();

        $playlist = new Playlist();
        $playlist->user_id = '2';
        $playlist->name = 'Nhac Rap';
        $playlist->save();

        $playlist = new Playlist();
        $playlist->user_id = '3';
        $playlist->name = 'Nhac Vang';
        $playlist->save();
    }
}
