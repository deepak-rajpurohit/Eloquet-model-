<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('users', [UserController::class, 'user']);
// Route::post('users', [UserController::class, 'post']);
// Route::put('users', [UserController::class, 'put']);
// Route::delete('users', [UserController::class, 'delete']);

//Route::any('users',[UserController::class,'any']);

Route::match(['post','get'], '/users',[UserController::class,'group1']);
Route::match(['put','delete'], '/users',[UserController::class,'group2']);
Route::view('form','user');
