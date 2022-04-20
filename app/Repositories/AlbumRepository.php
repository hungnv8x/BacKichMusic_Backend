<?php
namespace App\Repositories;
use App\Models\Album;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;



class AlbumRepository extends BaseRepository
{
    public function getTable()
    {
        return 'albums';
    }

    public function getAll()
    {
        return DB::table('albums')->join('categories', 'albums.category_id', '=', 'categories.id')
        ->join('singers', 'albums.singer_id', '=', 'singers.id')
        ->select('albums.*', 'categories.name as category', 'singers.name as singer')
        ->get();
    }

    public function getById($id)
    {
        return DB::table($this->table)->join('categories', 'albums.category_id', '=', 'categories.id')
        ->join('singers', 'albums.singer_id', '=', 'singers.id')
        ->select('albums.*', 'categories.name as category', 'singers.name as singer')->where('singers.id',$id)->first();
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







