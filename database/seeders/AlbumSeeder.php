<?php

namespace Database\Seeders;

// use App\Models\Album;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = new Album();
        $album->name = 'Vol 1';
        $album->singer_id = '1';
        $album->category_id = '1';
        $album->save();

        $album = new Album();
        $album->name = 'Vol 2';
        $album->singer_id = '2';
        $album->category_id = '2';
        $album->save();

        $album = new Album();
        $album->name = 'Vol 3';
        $album->singer_id = '3';
        $album->category_id = '3';
        $album->save();
    }
}
