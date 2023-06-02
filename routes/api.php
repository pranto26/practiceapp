<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\UserController;

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

Route::get('booklist',[APIController::class,'booklist']);
Route::post('createbook',[APIController::class,'create'])->name('create.book');
Route::put('update/{id}',[APIcontroller::class,'update']);
Route::post('delete/{id?}',[APIcontroller::class,'delete']);
Route::get('search/{id}',[APIController::class,'search']);
Route::post('/file',[APIController::class,'file']);

Route::post("login",[UserController::class,'index']);
