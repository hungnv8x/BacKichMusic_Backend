<?php

namespace App\Repositories;

use App\Models\Song;
use http\Env\Request;

class SongRepository extends BaseRepository
{
//    public $table = 'songs';
    public function getTable()
    {
        return 'songs';
    }

    public function store($request)
    {
        $song = new Song();

        $song->album_id = $request->album_id;
        $song->category_id = $request->category_id;
        $song->singer_id = $request->singer_id;
        $song->author_id = $request->author_id;
        $song->user_id = $request->user_id;

        $song->name = $request->name;
        $song->image = $request->image;
        // $song->description = $request->name;
        // $song->parent_id = $request->parent_id;
        $song->save();

    }

    public function update($request,$id)
    {
        $song = song::find($id);

        $song->name = $request->name;
        // $song->description = $request->name;
        // $song->parent_id = $request->parent_id;
        $song->save();
    }

}
