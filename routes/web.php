<?php

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


Route::get('/blog', function () {
  $blog_posts = [
    [
      "title" => "Post ke 1",
      "slug" => "post-ke-1",
      "author" => "Stevennius Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse. Qui voluptates incidunt enim deleniti officiis corporis dignissimos eaque id harum, optio omnis eos aut fugit soluta ipsum, sint culpa quia earum veritatis. Quas dignissimos iure ratione, repudiandae pariatur quo nihil!"
    ],
    [
      "title" => "Post 2",
      "slug" => "post-2",
      "author" => "Kelvin Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse."
    ]
  ];
  return view('blog', [
    "title" => "Blog",
    "posts" => $blog_posts
  ]);
});


// single posts
Route::get("blog/{slug}", function($slug){
    $blog_posts = [
    [
      "title" => "Post ke 1",
      "slug" => "post-ke-1",
      "author" => "Stevennius Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse. Qui voluptates incidunt enim deleniti officiis corporis dignissimos eaque id harum, optio omnis eos aut fugit soluta ipsum, sint culpa quia earum veritatis. Quas dignissimos iure ratione, repudiandae pariatur quo nihil!"
    ],
    [
      "title" => "Post 2",
      "slug" => "post-2",
      "author" => "Kelvin Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse."
    ]
  ];
  $blog_posts = [
    [
      "title" => "Post ke 1",
      "slug" => "post-ke-1",
      "author" => "Stevennius Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse. Qui voluptates incidunt enim deleniti officiis corporis dignissimos eaque id harum, optio omnis eos aut fugit soluta ipsum, sint culpa quia earum veritatis. Quas dignissimos iure ratione, repudiandae pariatur quo nihil!"
    ],
    [
      "title" => "Post 2",
      "slug" => "post-2",
      "author" => "Kelvin Chandra",
      "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis. Necessitatibus dicta, non odio dolorum vero praesentium veritatis esse."
    ]
  ];
  
  $choosen_post = [];
  
  foreach($blog_posts as $post){
    if($slug == $post["slug"]){
      $choosen_post = $post;
    }
  }
  
  return view("post", [
    "title" => "Single post",
    "post" => $choosen_post
  ]);
});