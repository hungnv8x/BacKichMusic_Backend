<?php

namespace App\Http\Controllers;

// use PlaylistRepository;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\PlaylistRepository;



class PlaylistController extends Controller
{
    public $playlistRepository;
    public $userRepository;
    public function __construct(PlaylistRepository $playlistRepository)
    {
        $this->playlistRepository = $playlistRepository;


    }

    public function index()
    {
        $playlists = $this->playlistRepository->getAll();
        return response()->json($playlists, 200);
    }

    public function store(Request $request)
    {

        $this->playlistRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
        ], 200);

    }


    public function show($id)
    {
        $playlist = $this->playlistRepository->getById($id);
        return response()->json($playlist,200);

    }


    public function update(Request $request, $id)
    {
        $this->playlistRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }

    public function destroy(Playlist $playlist)
    {
        $this->playlistRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
