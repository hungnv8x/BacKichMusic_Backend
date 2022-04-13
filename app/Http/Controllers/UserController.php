<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;


    }
    public function index()
    {
        $users = $this->userRepository->getAll();
        return response()->json($users,200);
    }

    public function store(Request $request)
    {
        $this->userRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return response()->json($user,200);

    }

    public function update(Request $request, $id)
    {
        $this->userRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);


    }

    public function destroy($id)
    {
        $this->userRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
