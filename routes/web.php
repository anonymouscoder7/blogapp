<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create-category',[CategoryController::class,'create']);
Route::post('/store-category',[CategoryController::class,'store']);
Route::get('/categories',[CategoryController::class,'index']);

Route::get('/create-blog',[BlogController::class,'create']);
Route::post('/store-blog',[BlogController::class,'store']);
Route::get('/edit-blog/{id}',[BlogController::class,'edit']);

Route::post('/update-blog',[BlogController::class,'update']);
Route::get('/delete-blog/{id}',[BlogController::class,'destroy']);

Route::get('/blogs',[BlogController::class,'index']);




