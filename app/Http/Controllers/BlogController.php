<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
                        ->limit(6)
                        ->get();

        return view('blog', compact('posts'));                        
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $recent_posts = Post::orderBy('id','DESC')->limit(5)->get();

        if (!$post)
            abort(404);

        return view('single', compact('post', 'recent_posts'));
    }

}
