<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::prefix('users')->group(function () {
    Route::get('',[UserController::class, 'index'])->name('user.index');
    Route::get('create',[UserController::class, 'create'])->name('user.showFormCreate');
    Route::post('create',[UserController::class, 'store'])->name('user.create');
    Route::get('{id}/update',[UserController::class, 'edit'])->name('user.showFormUpdate');
    Route::put('{id}/update',[UserController::class, 'update'])->name('user.update');
    Route::get('{id}/detail',[UserController::class, 'show'])->name('user.detail');
    Route::delete('{id}/delete',[UserController::class, 'destroy'])->name('user.delete');
});

Route::prefix('categories')->group(function () {
    Route::get('',[CategoryController::class, 'index'])->name('category.index');
    Route::get('create',[CategoryController::class, 'create'])->name('category.showFormCreate');
    Route::post('create',[CategoryController::class, 'store'])->name('category.create');
    Route::get('{id}/update',[CategoryController::class, 'edit'])->name('category.showFormUpdate');
    Route::put('{id}/update',[CategoryController::class, 'update'])->name('category.update');
    Route::get('{id}/detail',[CategoryController::class, 'show'])->name('category.detail');
    Route::delete('{id}/delete',[CategoryController::class, 'destroy'])->name('category.delete');
});
