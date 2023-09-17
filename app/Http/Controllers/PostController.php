<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost(){
        $posts = Post::where('is_published',1)->get();
        
        return response($posts);

    }

    public function createPost(Request $request){
        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();
    }
}
