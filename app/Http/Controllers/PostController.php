<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  string  $category
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $category = Category::whereSlug($category)->with('posts')->firstOrFail();

        return view('posts', compact('category'));
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        
        return view('post', compact('post'));
    }

}
