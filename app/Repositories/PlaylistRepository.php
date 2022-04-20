<?php
namespace App\Repositories;

use Carbon\Carbon;
use http\Env\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\DB;





class PlaylistRepository extends BaseRepository
{
    public function getTable()
    {
        return 'playlists';
    }

    public function getAll()
    {
        return DB::table('playlists')->join('users', 'playlists.user_id', '=', 'users.id')
        ->select('playlists.*', 'users.name as user')
        ->get();
    }

    public function getById($id)
    {
        return DB::table($this->table)->join('users', 'playlists.user_id', '=', 'users.id')
        ->select('playlists.*', 'users.name as user')->where('playlists.id',$id)->first();

    }

    public function store($request)
    {
        $playlist = new Playlist;
        $playlist->user_id = $request->user_id;
        $playlist->name = $request->name;
        $playlist->description = $request->desciption;
        $playlist->image = $request->image;
        $playlist->quantity = $request->quantity;
        $playlist->view = rand(10000,90000);
        $playlist->like = rand(10000,90000);
        $playlist->posting_date = Carbon::now();
        $playlist->final_update = Carbon::now();
        $playlist->save();

    }

    public function update($request, $id)
    {
        $playlist = Playlist::find($id);
        $playlist->user_id = $request->user_id;
        $playlist->name = $request->name;
        $playlist->description = $request->desciption;
        $playlist->image = $request->image;
        $playlist->quantity = $request->quantity;
        $playlist->view = rand(10000,90000);
        $playlist->like = rand(10000,90000);
        $playlist->final_update = Carbon::now();
        $playlist->save();

    }





}

?>
