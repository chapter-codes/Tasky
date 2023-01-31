<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FilesController;


Route::get('/', function () {
    return view('index');
});

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}',[UsersController::class, 'show']);
Route::get('/users/{name',[UsersController::class, 'show']);
Route::get('/user/',  [UsersController::class, 'search']);


Route::get('/file', [FilesController::class, 'index']);
