<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    public $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;


    }
    public function index()
    {
        $roles = $this->roleRepository->getAll();
        return response()->json($roles,200);
    }

    public function store(Request $request)
    {
        $this->roleRepository->store($request);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function show($id)
    {
        $role = $this->roleRepository->getById($id);
        return response()->json($role,200);

    }

    public function update(Request $request, $id)
    {
        $this->roleRepository->update($request,$id);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);


    }

    public function destroy($id)
    {
        $this->roleRepository->deleteById($id);
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);

    }
}
