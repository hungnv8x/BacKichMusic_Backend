<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Repositories\CommentRepository;
use App\Repositories\SongRepository;
use App\Repositories\UserRepository;

class CommentController extends Controller
{
    public $commentRepository;
    public $userRepository;
    public $songRepository;
    public function __construct(CommentRepository $commentRepository,
                                UserRepository $userRepository,
                                SongRepository $songRepository){
       $this->commentRepository= $commentRepository;
       $this->userRepository= $userRepository;
       $this->songRepository= $songRepository;
    }

    public function index()
    {
        $comments = $this->commentRepository->getAll();
        return response()->json($comments, 200);

    }

    public function store(Request $request)
    {
        $users = $this->userRepository->getAll();
        $songs = $this->songRepository->getAll();
        $this->commentRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
            $users,
            $songs
        ], 200);

    }


    public function show($id)
    {
        $comment = $this->commentRepository->getById($id);
        return response()->json($comment,200);
    }



    public function update(Request $request, $id)
    {
        $users = $this->userRepository->getAll();
        $songs = $this->songRepository->getAll();
        $this->commentRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true,
            $users,
            $songs
        ], 200);
    }


    public function destroy($id)
    {
        $this->commentRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
