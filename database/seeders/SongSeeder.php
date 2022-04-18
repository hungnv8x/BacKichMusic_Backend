<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song();
        $song->name = 'Nam Lay Tay Anh';
        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->save();

        $song = new Song();
        $song->name = 'Sau Tat Ca';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->save();

        $song = new Song();
        $song->name = 'Danh Mat Em';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->save();


    }
}
