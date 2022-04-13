<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('roles')->group(function () {
    Route::get('',[RoleController::class, 'index'])->name('role.index');
    Route::get('create',[RoleController::class, 'create'])->name('role.showFormCreate');
    Route::post('create',[RoleController::class, 'store'])->name('role.create');
    Route::get('{id}/update',[RoleController::class, 'edit'])->name('role.showFormUpdate');
    Route::put('{id}/update',[RoleController::class, 'update'])->name('role.update');
    Route::get('{id}/detail',[RoleController::class, 'show'])->name('role.detail');
    Route::delete('{id}/delete',[RoleController::class, 'destroy'])->name('role.delete');
});
