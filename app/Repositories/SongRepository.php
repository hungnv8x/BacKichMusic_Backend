<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Song;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

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
        $song->description = $request->desciption;
        $song->image = $request->image;
        $song->like = rand(10000,90000);
        $song->view = rand(10000,90000);
        $song->posting_date = Carbon::now();

        $song->save();

    }

    public function update($request,$id)
    {
        $song = song::find($id);

        $song->album_id = $request->album_id;
        $song->category_id = $request->category_id;
        $song->singer_id = $request->singer_id;
        $song->author_id = $request->author_id;
        $song->user_id = $request->user_id;

        $song->name = $request->name;
        $song->description = $request->desciption;
        $song->image = $request->image;
        $song->like = $request->like;
        $song->view= $request->view;
        $song->save();

    }
    public function getTopView(){
        return  DB::table($this->table)->orderBy('view','desc')->limit(8)->get();
    }
    public function getTopLike(){
        return  DB::table($this->table)->orderBy('like','desc')->limit(8)->get();
    }
    public function getTopNew(){
        return  DB::table($this->table)->orderBy('created_at','desc')->limit(8)->get();
    }
    public function getSongBySinger($id){
        return  DB::table($this->table)->where('singer_id',$id)->get();
    }
    public function getSongByCategory($id){
        return  DB::table($this->table)->where('category_id',$id)->get();
    }

}
