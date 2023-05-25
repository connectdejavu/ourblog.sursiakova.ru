<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('blog', ['posts' => Auth::user()->posts()->latest()->get()]);
    }


    //добавление записи
    public function showAddPostsForm()
    {
       return view('posts.post-add');
    }

    public function blogPost(Request $request)
    {
       Auth::user()->posts()->create([  'topic' => $request->topic, 
                                        'description' => $request->description,
                                        'likes' => 1,  
                                        'media' => $request->media]);
       return redirect()->route("blog");
    }

    //редактирование записи
    public function showEditPostsForm(Post $post){
        return view('posts.post-update', ['post'=>$post]);
    }

    public function updatePost(Request $request, Post $post){
        $post->fill([   'topic' => $request->topic, 
                        'description' => $request->description,
                        'likes' => 1,  
                        'media' => $request->media]);
        $post->save();
        return redirect()->route("blog");

    }


     //удаление записи
     public function showDeletePostsForm(Post $post){
        return view('posts.post-delete', ['post'=>$post]);
     }
 
     public function destroyPost(Post $post){
        $post->delete();
        return redirect()->route("blog");
     }
 




}
