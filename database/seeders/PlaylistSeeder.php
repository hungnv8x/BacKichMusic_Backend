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
        $playlist->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlS-aT7-5OcfcHhqqqyUw4oyv-beAX5Q80Q&usqp=CAU';
        $playlist->description = 'Nhạc dành cho giới trẻ.';
        $playlist->quantity = 12;
        $playlist->posting_date = '2022/02/02';
        $playlist->final_update = '2022/02/02';
        $playlist->like = 1233;
        $playlist->view = 8723;
        $playlist->save();

        $playlist = new Playlist();
        $playlist->user_id = '2';
        $playlist->name = 'Nhac Rap';
        $playlist->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlS-aT7-5OcfcHhqqqyUw4oyv-beAX5Q80Q&usqp=CAU';
        $playlist->description = 'Nhạc dành cho giới trẻ. Ưa thích sự sập sình';
        $playlist->quantity = 12;
        $playlist->like = 1133;
        $playlist->view = 8723;
        $playlist->posting_date = '2022/02/02';
        $playlist->final_update = '2022/02/02';
        $playlist->save();

        $playlist = new Playlist();
        $playlist->user_id = '3';
        $playlist->name = 'Nhac Vang';
        $playlist->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlS-aT7-5OcfcHhqqqyUw4oyv-beAX5Q80Q&usqp=CAU';
        $playlist->description = 'Nhạc dành cho người lớn tuổi hay những người hay hoài niệm về cuộc sống.';
        $playlist->quantity = 12;
        $playlist->like = 1543;
        $playlist->view = 8723;
        $playlist->posting_date = '2022/02/02';
        $playlist->final_update = '2022/02/02';

        $playlist->save();
    }
}
