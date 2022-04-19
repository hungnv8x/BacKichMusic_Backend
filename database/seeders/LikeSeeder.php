<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $like = new Like;
        $like->playlist_id = 1;
        $like->song_id = 1;
        $like->save();

        $like = new Like;
        $like->playlist_id = 2;
        $like->song_id = 2;
        $like->save();

        $like = new Like;
        $like->playlist_id = 1;
        $like->song_id = 2;
        $like->save();

    }
}
