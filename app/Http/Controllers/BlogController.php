<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::query()->latest()->take(3)->get();
        return view('blog.homepage', ['blogs' => $blogs]);
    }


    public function show(int $id)
    {
        $blog = Blog::query()->findOrFail($id);
        return view('blog.detail', ['blog' => $blog]);
    }
}
