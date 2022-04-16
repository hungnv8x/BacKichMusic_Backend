<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Repositories\AuthorRepository;

class AuthorController extends Controller
{
    public $authorRepository;
    public function __construct(AuthorRepository $authorRepository){
        $this->authorRepository= $authorRepository;
     }

    public function index()
    {
        $authors = $this->authorRepository->getAll();
        return response()->json($authors, 200);

    }

    public function store(Request $request)
    {
        $this->authorRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }


    public function show(Author $author)
    {
        $author = $this->authorRepository->getById($id);
        return response()->json($author,200);
    }





    public function update(Request $request, Author $author)
    {
        $this->authorRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }


    public function destroy(Author $author)
    {
        $this->authorRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
