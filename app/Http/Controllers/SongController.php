<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Models\Song;
use App\Repositories\SongRepository;
use Illuminate\Http\Request;


class SongController extends Controller
{
    public $songRepository;
    public function __construct(SongRepository $songRepository)
    {
        $this->songRepository = $songRepository;


    }
    public function index()
    {
        $songs = $this->songRepository->getAll();
        return response()->json($songs,200);
    }

    public function store(Request $request)
    {
        $this->songRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function show($id)
    {
        $song = $this->songRepository->getById($id);
        return response()->json($song,200);

    }

    public function update(Request $request, $id)
    {
        $this->songRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);


    }

    public function destroy($id)
    {
        $this->songRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
