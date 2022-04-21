<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlaylistController;


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
Route::post('/login', [AuthController::class, 'login']);
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);
});


Route::prefix('roles')->group(function () {
    Route::get('',[RoleController::class, 'index']);
    Route::get('create',[RoleController::class, 'create']);
    Route::post('create',[RoleController::class, 'store']);
    Route::get('{id}/update',[RoleController::class, 'edit']);
    Route::put('{id}/update',[RoleController::class, 'update']);
    Route::get('{id}/detail',[RoleController::class, 'show']);
    Route::delete('{id}/delete',[RoleController::class, 'destroy']);
});

Route::prefix('users')->group(function () {
    Route::get('',[UserController::class, 'index']);
    Route::get('create',[UserController::class, 'create']);
    Route::post('create',[UserController::class, 'store']);
    Route::get('{id}/update',[UserController::class, 'edit']);
    Route::put('{id}/update',[UserController::class, 'update']);
    Route::get('{id}/detail',[UserController::class, 'show']);
    Route::delete('{id}/delete',[UserController::class, 'destroy']);
});

Route::prefix('categories')->group(function () {
    Route::get('',[CategoryController::class, 'index']);
    Route::get('create',[CategoryController::class, 'create']);
    Route::post('create',[CategoryController::class, 'store']);
    Route::get('{id}/update',[CategoryController::class, 'edit']);
    Route::put('{id}/update',[CategoryController::class, 'update']);
    Route::get('{id}/detail',[CategoryController::class, 'show']);
    Route::delete('{id}/delete',[CategoryController::class, 'destroy']);
});


Route::prefix('singers')->group(function(){
    Route::get('', [SingerController::class, 'index']);
    Route::post('create', [SingerController::class, 'store']);
    Route::get('{id}/detail', [SingerController::class, 'show']);
    Route::put('{id}/update', [SingerController::class, 'update']);
    Route::delete('{id}/update', [SingerController::class, 'destroy']);

});

Route::prefix('authors')->group(function(){
    Route::get('', [AuthorController::class, 'index']);
    Route::post('create', [AuthorController::class, 'store']);
    Route::get('{id}/detail', [AuthorController::class, 'show']);
    Route::put('{id}/update', [AuthorController::class, 'update']);
    Route::delete('{id}/delete', [AuthorController::class, 'destroy']);

});


Route::prefix('songs')->group(function () {
    Route::get('',[SongController::class, 'index']);
    Route::get('topview',[SongController::class, 'getTopView']);
    Route::get('topnew',[SongController::class, 'getTopNew']);
    Route::get('toplike',[SongController::class, 'getTopLike']);
    Route::get('{id}/singer',[SongController::class, 'getSongBySinger']);
    Route::get('{id}/category',[SongController::class, 'getSongByCategory']);


    Route::get('create',[SongController::class, 'create']);
    Route::post('create',[SongController::class, 'store']);
    Route::get('{id}/update',[SongController::class, 'edit']);
    Route::put('{id}/update',[SongController::class, 'update']);
    Route::get('{id}/detail',[SongController::class, 'show']);
    Route::delete('{id}/delete',[SongController::class, 'destroy']);
});

Route::prefix('albums')->group(function(){
    Route::get('', [AlbumController::class, 'index']);
    Route::post('create', [AlbumController::class, 'store']);
    Route::get('{id}/detail', [AlbumController::class, 'show']);
    Route::put('{id}/update', [AlbumController::class, 'update']);
    Route::delete('{id}/update', [AlbumController::class, 'destroy']);

});

Route::prefix('playlists')->group(function(){
    Route::get('', [PlaylistController::class, 'index']);
    Route::post('create', [PlaylistController::class, 'store']);
    Route::get('{id}/detail', [PlaylistController::class, 'show']);
    Route::put('{id}/update', [PlaylistController::class, 'update']);
    Route::delete('{id}/update', [PlaylistController::class, 'destroy']);

});


