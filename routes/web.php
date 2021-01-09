<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/',[PageController::class,'index']);

Route::get('posts',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create']);
Route::post('posts',[PostController::class,'store']);
Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::get('posts/{post:slug}/edit',[PostController::class,'edit']);
Route::put('posts/{post:slug}',[PostController::class,'update']);
Route::delete('posts/{post:slug}',[PostController::class,'destroy']);
Route::get('categories/{category:slug}',[CategoryController::class,'show']);