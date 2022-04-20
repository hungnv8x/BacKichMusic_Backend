<?php
namespace App\Repositories;
use Carbon\Carbon;
use App\Models\Playlist;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;




class PlaylistRepository extends BaseRepository
{
    public function getTable()
    {
        return 'playlists';
    }

    // public function getAll()
    // {
    //     return DB::table('playlists')->join('users', 'playlists.user_id', '=', 'users.id')
    //     ->select('playlist.*', 'users.name as name')
    //     ->get();
    // }

}

?>
