<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('user','user');
Route::post('add-user',[UserController::class,'adduser']);
Route::get('user-list',[UserController::class,'userlist']);
Route::get('delete-user/{id}',[UserController::class,'deleteuser']);
Route::get('edit-user/{id}',[UserController::class,'edituser']);
Route::put('update-user/{id}',[UserController::class,'updateuser']);
Route::post('search-user',[UserController::class,'searchuser']);