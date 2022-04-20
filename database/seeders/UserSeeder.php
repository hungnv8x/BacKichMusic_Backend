<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

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
        $user->email = "duc@gmail.com";
        $user->password = Hash::make('123456');
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Nhung";
        $user->email = "nhung@gmail.com";
        $user->role_id = 1;
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "Dat";
        $user->email = "dat@gmail.com";
        $user->password = Hash::make('123456');
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = "Hung";
        $user->email = "hung@gmail.com";
        $user->password = Hash::make('123456');
        $user->role_id = 2;
        $user->save();
    }
}
