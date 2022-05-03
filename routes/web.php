<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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
  return view('home', [
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view('about', [

    "title" => "About",
    "name" => "Stevennius Chandra",
    "email" => "stevenniuschandra@gmail.com",
    "number" => "089612699300"

  ]);
});


Route::get('/blog', [PostController::class, "index"]);


// single posts
Route::get("blog/{slug}", [PostController::class, "show"]);