<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'getUsers']);
Route::get('/users/add', [UsersController::class, 'addUser']);
Route::get('/users/{user}/edit', [UsersController::class, 'editUser']);
Route::put('/users/{user}', [UsersController::class, 'updateUser']);
Route::post('/users', [UsersController::class, 'createUser']);
Route::delete('/users/{user}', [UsersController::class, 'deleteUser']);
