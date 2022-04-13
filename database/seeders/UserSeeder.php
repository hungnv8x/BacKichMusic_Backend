<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Duc";
        $user->email = "Duc@gmail.com";
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Nhung";
        $user->email = "Nhung@gmail.com";
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Dat";
        $user->email = "Dat@gmail.com";
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = "Hung";
        $user->email = "Hung@gmail.com";
        $user->role_id = 2;
        $user->save();
    }
}
