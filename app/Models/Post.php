<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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
  
  public static function all(){
    return self::$blog_posts;
  }
  
  public static function find($slug){
    $posts = self::$blog_posts;
    
    foreach ($posts as $post){
      if($post["slug"] == $slug){
        $choosen_post = $post;
      }
    }
    
    if(isset($choosen_post)){
      return $choosen_post;
    }
    
  }

}
