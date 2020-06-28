<?php


namespace App\Http\Controllers;

use App\Post;

class PostsController
{
public function show($slug){

   /* $post=\DB::table('posts')->where('slug', $slug)->first();*/

    /*dd($post);*/

    /*$posts =[
        'my-first-post'=>'Hello, this is my first post!',
        'my-second-post'=>'Now I am getting the hang of this blogging thing.'
    ];*/

   /* if (! array_key_exists($post, $posts)){
        abort(404, "Sorry, that post was not found.");
    }*/


        'post'= Post::where ('slug', $slug)->first();

}
}
