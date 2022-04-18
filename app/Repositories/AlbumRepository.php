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
        $album->save();

    }

    public function update($request,$id)
    {
        $album = album::find($id);
        $album->name = $album->name??$album->name;
        $album->avatar = $album->avatar??$album->avatar;
        $album->gender = $request->gender??$album->gender;
        $album->category_id= $request->category_id??$album->category_id;
        $album->date_of_birth = $request->date_of_birth??$album->date_of_birth;
        $album->biography = $request->biography??$album->biography;
        $album->band = $request->band??$album->band;
        $album->hit = $request->hit??$album->hit;
        $album->information = $request->information??$album->information;
        $album->save();


    }


}

?>







