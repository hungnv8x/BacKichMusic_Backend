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
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650333474060?alt=media&token=6ccf3690-9d09-4116-ba02-d1051595fa19';
        $song->description = 'Nam chat vao nhe';

        $song->save();
        $song = new Song();
        $song->name = 'Nam Lay Tay Anh 2';
        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->save();
        $song = new Song();
        $song->name = 'Nam Lay Tay Anh 3';
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
        $song->description = 'minh lai oanh nhau';

        $song->save();
        $song = new Song();
        $song->name = 'Sau Tat Ca 2';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->save();
        $song = new Song();
        $song->name = 'Sau Tat Ca 3';
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
        $song->description = 'Mat to nhe';
        $song->save();
        $song = new Song();
        $song->name = 'Danh Mat Em 2';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->save();
        $song = new Song();
        $song->name = 'Danh Mat Em 3';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->save();


    }
}
