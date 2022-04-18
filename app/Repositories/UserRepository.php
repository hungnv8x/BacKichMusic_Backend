<?php

namespace App\Repositories;

use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
//    public $table = 'users';
    public function getTable()
    {
        return 'users';
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->name;
        
        $user->avatar = $request->avatar;

        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

    }

    public function update($request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;

        if ($request->has('avatar')) {
            $file = $request->avatar;
            $file_name = time() . '_' . $file->getClientOriginalName();
            // dd($file_name);
            $file->move(public_path('uploads'), $file_name);
        }
        $user['avatar'] = $file_name ?? "";

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


    }

}
