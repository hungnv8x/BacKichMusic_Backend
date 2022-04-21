<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;
use App\Http\Requests\SingerRequest;
use App\Repositories\SingerRepository;
use App\Repositories\CategoryRepository;

class SingerController extends Controller
{
    public $singerRepository;
    public $categoryRepository;
    public function __construct(SingerRepository $singerRepository,
                                CategoryRepository $categoryRepository){
       $this->singerRepository= $singerRepository;
       $this->categoryRepository= $categoryRepository;
    }

//     public function index(Request $request)
//     {
//         if(isset($request->search)){
//             $singers = $this->search($request->search);
//         }else{

//             $singers = $this->singerRepository->getAll();
//         }
// //        return view('index', compact('singers'));
//         return response()->json($singers, 201);
//     }

    public function index()
    {
        $singers = $this->singerRepository->getAll();
        return response()->json($singers, 200);

    }

    public function search($data)
    {
        $singers =  $this->singerRepository->searchBySinger($data);
        return response()->json($singers, 200);
    }

    public function store(Request $request)
    {
        $categories = $this->categoryRepository->getAll();
        $this->singerRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
            $categories
        ], 200);

    }


    public function show($id)
    {
        $singer = $this->singerRepository->getById($id);
        return response()->json($singer,200);
    }



    public function update(Request $request, $id)
    {
        $categories = $this->categoryRepository->getAll();
        $this->singerRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true,
            $categories
        ], 200);
    }


    public function destroy($id)
    {
        $this->singerRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
