<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use App\Repositories\AlbumRepository;
use App\Repositories\SingerRepository;
use App\Repositories\CategoryRepository;

class AlbumController extends Controller
{
    public $albumRepository;
    public $categoryRepository;
    public $singerRepository;
    public function __construct(AlbumRepository $albumRepository,
                                CategoryRepository $categoryRepository,
                                SingerRepository $singerRepository){
       $this->albumRepository= $albumRepository;
       $this->categoryRepository= $categoryRepository;
       $this->singerRepository= $singerRepository;
    }

    public function index()
    {
        $albums = $this->albumRepository->getAll();
        return response()->json($albums, 200);

    }

    public function store(Request $request)
    {
        $categories = $this->categoryRepository->getAll();
        $singers = $this->singerRepository->getAll();
        $this->albumRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
            $categories,
            $singers
        ], 200);

    }


    public function show($id)
    {
        $album = $this->albumRepository->getById($id);
        return response()->json($album,200);
    }



    public function update(Request $request, $id)
    {
        $categories = $this->categoryRepository->getAll();
        $singers = $this->singerRepository->getAll();
        $this->albumRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true,
            $categories,
            $singers
        ], 200);
    }


    public function destroy($id)
    {
        $this->albumRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
