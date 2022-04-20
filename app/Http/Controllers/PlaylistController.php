<?php

namespace App\Http\Controllers;

// use PlaylistRepository;
use App\Models\Playlist;
use App\Repositories\PlaylistRepository;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public $playlistRepository;
    public function __construct(PlaylistRepository $playlistRepository)
    {
        $this->playlistReporitory = $playlistRepository;


    }

    public function index()
    {
        $playlists = $this->playlistRepository->getAll();
        return response()->json($playlists, 200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(Playlist $playlist)
    {
        //
    }


    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    public function destroy(Playlist $playlist)
    {
        //
    }
}
