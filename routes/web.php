<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

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

Route::get('/',[HomeController::class,'welcome'])->name('welcome'); 
Route::get('/booklist',[HomeController::class,'booklist'])->name('book.list'); 
Route::get('/addbook',[HomeController::class,'addbook'])->name('add.book');
Route::post('/addbook',[HomeController::class,'addbooksubmit'])->name('add.book'); 
Route::get('/delete{id}',[HomeController::class,'deletebook'])->name('delete.book'); 
Route::get('/update{id}',[HomeController::class,'updatebook'])->name('delete.book'); 
Route::get('/getrelation',[CustomerController::class,'getone'])->name('get.one'); 
Route::get('/getrelmany',[CustomerController::class,'getmany'])->name('get.many'); 