<?php
namespace App\Repositories;
use App\Models\Comment;
use http\Env\Request;


class CommentRepository extends BaseRepository
{
    public function getTable()
    {
        return 'comments';
    }

    public function store($request)
    {
        $comment = new Comment();
        $comment->user_id= $request->user_id;
        $comment->avatar = $request->avatar;
        $comment->song_id= $request->song_id;
        $comment->content= $request->content;


        $comment->save();

    }

    public function update($request,$id)
    {
        $comment = Comment::find($id);
        $comment->user_id= $request->user_id;
        $comment->avatar = $request->avatar;
        $comment->song_id= $request->song_id;
        $comment->content= $request->content;
        $comment->save();


    }


}

?>




