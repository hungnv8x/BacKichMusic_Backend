<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;


    }
    public function index()
    {
        $categorys = $this->categoryRepository->getAll();
        return response()->json($categorys,200);
    }

    public function store(Request $request)
    {
        $this->categoryRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function show($id)
    {
        $category = $this->categoryRepository->getById($id);
        return response()->json($category,200);

    }

    public function update(Request $request, $id)
    {
        $this->categoryRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);


    }

    public function destroy($id)
    {
        $this->categoryRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
