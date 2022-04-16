<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;
use App\Http\Requests\SingerRequest;
use App\Repositories\SingerRepository;

class SingerController extends Controller
{
    public $singerRepository;
    public function __construct(SingerRepository $singerRepository){
       $this->singerRepository= $singerRepository;
    }

    public function index()
    {
        $singers = $this->singerRepository->getAll();
        return response()->json($singers, 200);

    }

    public function store(Request $request)
    {
        $this->singerRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);

    }


    public function show(Singer $singer)
    {
        $singer = $this->singerRepository->getById($id);
        return response()->json($singer,200);
    }



    public function update(Request $request, Singer $singer)
    {
        $this->singerRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }


    public function destroy(Singer $singer)
    {
        $this->singerRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
