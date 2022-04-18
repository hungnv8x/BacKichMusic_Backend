<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment();
        $comment->content = 'Hay Qua !';
        $comment->user_id = '1';
        $comment->song_id = '1';
        $comment->save();

        $comment = new Comment();
        $comment->content = 'Khong Hay !';
        $comment->user_id = '2';
        $comment->song_id = '2';
        $comment->save();

        $comment = new Comment();
        $comment->content = 'Binh Thuong !';
        $comment->user_id = '3';
        $comment->song_id = '3';
        $comment->save();
    }
}
