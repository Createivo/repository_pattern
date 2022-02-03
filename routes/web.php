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

Route::prefix('user')->group(function () {
    Route::get('' , [UsersController::class , 'index']) -> name('user.all');
    Route::get('{id}' , [UsersController::class , 'show']);
});

// create
Route::get('users/create'  , [UsersController::class , 'createUser']);
Route::post('users/store' , [UsersController::class , 'storeUser']) -> name('user.store');

//update
Route::get('users/update/{id}' , [UsersController::class , 'update']);
Route::put('users/edit/{id}' , [UsersController::class , 'edit'])->name('user.edit');

