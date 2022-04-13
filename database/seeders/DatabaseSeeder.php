<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SingerSeeder::class,
            AuthorSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            CommentSeeder::class,
            PlaylistSeeder::class,
            PlaylistSongSeeder::class,
        ]);
    }
}
