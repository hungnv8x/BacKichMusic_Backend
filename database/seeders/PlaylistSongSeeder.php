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
        $playlistSong->name = 'Yêu đời. Không quạu';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650333474060?alt=media&token=6ccf3690-9d09-4116-ba02-d1051595fa19';
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 2;
        $playlistSong->song_id = 2;
        $playlistSong->name = 'Sống phải hướng về phía trước';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 2;
        $playlistSong->song_id = 2;
        $playlistSong->name = 'Sống phải hướng về phía trước';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 3;
        $playlistSong->song_id = 3;
        $playlistSong->name = 'Có nhiều thứ để khám phá lắm';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';
        $playlistSong->save();

        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 3;
        $playlistSong->song_id = 3;
        $playlistSong->name = 'Có nhiều thứ để khám phá lắm';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';
        $playlistSong->save();


        $playlistSong = new Playlist_song();
        $playlistSong->playlist_id = 3;
        $playlistSong->song_id = 3;
        $playlistSong->name = 'Có nhiều thứ để khám phá lắm';
        $playlistSong->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTQJABncz6ccPzFPVAP8tYxh40Z3jL05RW5g&usqp=CAU';
        $playlistSong->link = '';
        $playlistSong->save();
    }

}
