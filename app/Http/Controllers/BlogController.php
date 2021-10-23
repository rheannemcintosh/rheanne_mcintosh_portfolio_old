<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    /**
     * Display a temporary blog page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $latestBlogPost = BlogPost::all()
            ->sortByDesc('posted_at')
            ->first();

        $blogPosts = BlogPost::where('id', '!=', $latestBlogPost->id)
            ->orderBy('posted_at', 'desc')
            ->get();

        return view('blog.index', compact('latestBlogPost', 'blogPosts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);

        return view('blog.post', compact('blogPost'));
    }
}
