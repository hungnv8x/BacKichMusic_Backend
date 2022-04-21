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

    public function getAll()
    {
        return DB::table('songs')->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->get();
    }

    public function getById($id)
    {
        return DB::table('songs')->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->where('songs.id',$id)->first();

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
        $song->like = 0;
        $song->view = 0;
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
        return  DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->orderBy('view','desc')->limit(8)->get();
    }
    public function getTopLike(){
        return  DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->orderBy('like','desc')->limit(4)->get();
    }
    public function getTopNew(){
        return  DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->orderBy('created_at','desc')->limit(8)->get();
    }
    public function getSongBySinger($id){
        return  DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->where('songs.singer_id',$id)->get();
    }
    public function getSongByCategory($id){
        return  DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->where('songs.category_id',$id)->get();
    }

    public function searchSong($data)
    {
        return DB::table($this->table)->join('categories', 'songs.category_id', '=', 'categories.id')
        ->join('singers', 'songs.singer_id', '=', 'singers.id')
        ->join('authors', 'songs.author_id', '=', 'authors.id')
        ->join('users', 'songs.user_id', '=', 'users.id')
        ->join('albums', 'songs.album_id', '=', 'albums.id')
        ->select('songs.*', 'categories.name as category', 'singers.name as singer', 'authors.name as author', 'albums.name as album', 'users.name as user')
        ->where('songs.name', 'like', "%$data%")->orWhere('singers.name', 'like', "%$data%")
        ->orWhere('authors.name', 'like', "%$data%")
        ->get();
    }


}
