<?php

namespace Database\Seeders;


use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//
        $author = new Author();
        $author->name = 'Trinh Cong Son';
        $author->save();

        $author = new Author();
        $author->name = 'Duong Thu';
        $author->save();

        $author = new Author();
        $author->name = 'Pham Truong';
        $author->save();
    }
}
