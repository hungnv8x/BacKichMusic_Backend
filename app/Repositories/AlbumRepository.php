<?php
namespace App\Repositories;
use App\Models\Album;
use http\Env\Request;


class AlbumRepository extends BaseRepository
{
    public function getTable()
    {
        return 'albums';
    }

    public function store($request)
    {
        $album = new Album();
        $album->category_id= $request->category_id;
        $album->singer_id= $request->singer_id;
        $album->name = $request->name;
        $album->image = $request->image;
        $album->link = $request->link;
        $album->save();

    }



    public function update($request,$id)
    {
        $album = Album::find($id);
        $album->category_id= $request->category_id;
        $album->singer_id= $request->singer_id;
        $album->name = $request->name;
        $album->image = $request->image;
        $album->link = $request->link;
        $album->save();


    }


}

?>







