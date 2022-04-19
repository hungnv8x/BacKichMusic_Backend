<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $singer = new Singer();
        $singer->name = "Hong Nhung";
        $singer->category_id = 1;
        $singer->save();

        $singer = new Singer();
        $singer->name = "Trung Duc";
        $singer->category_id = 2;
        $singer->save();

        $singer = new Singer();
        $singer->name = "Dat Git";
        $singer->category_id = 3;
        $singer->save();

        $singer = new Singer();
        $singer->name = "Tuan Hung";
        $singer->category_id = 4;
        $singer->save();

    }
}
