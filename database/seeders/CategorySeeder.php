<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Nhac Tre";
        $category->save();

        $category = new Category();
        $category->name = "Nhac Vang";
        $category->save();

        $category = new Category();
        $category->name = "Nhac Rap";
        $category->save();

        $category = new Category();
        $category->name = "Nhac Tru Tinh";
        $category->save();

        $category = new Category();
        $category->name = "Nhac Do";
        $category->save();
    }
}
