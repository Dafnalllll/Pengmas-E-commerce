<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs for users
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(9); // 9 blog per halaman
        return view('pages.user.blog', compact('blogs'));
    }

    /**
     * Display the specified blog
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $recentBlogs = Blog::where('id', '!=', $id)->latest()->take(3)->get();

        return view('components.blogdetail', compact('blog', 'recentBlogs'));
    }
}
