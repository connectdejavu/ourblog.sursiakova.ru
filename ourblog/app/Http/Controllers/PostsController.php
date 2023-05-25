<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function post() {
        // $posts=Post::latest()->get();
        // $text="Публикации";
        // foreach ($posts as $post){
        //     $text .= $post->topic ."\r\n";
        //     $text .= $post->description ."\r\n";
        //     $text .= $post->likes ."\r\n";
        //     $text .= $post->media ."\r\n";
        //     $text .= "\r\n";


        // }
        

        // return response($text)
        // ->header('Content-Type','text/plain');

        $context = ['posts' => Post::latest()->get()];
        return view('index', $context);
    }

    public function userPost(Post $post){
        return view('blog',['post'=>$post]);
    }

    public function detail(Post $post){
        return view('detail',['post'=>$post]);
    }




    public function otherUser(){
        return view('other-blog');
    }
}
