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

    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|max:20',
        ]);



        $blog = Blog::query()->create([
            'title'   => request('title'),
            'excerpt' => request('excerpt'),
            'body'    => request('body'),
            'bg_ima'  => 'banner2.jpg',
        ]);
        return redirect('/homepage');
    }

    public function edit(int $id)
    {
        $blog = Blog::query()->findOrFail($id);
        // return view('blog.edit', ['blog' => $blog]);
        return view('blog.edit', compact('blog'));
    }

    public function update(int $id)
    {
        $blog = Blog::query()->findOrFail($id);
        $blog = $blog->update([
            'title'   => request('title'),
            'excerpt' => request('excerpt'),
            'body'    => request('body'),
            'bg_ima'  => 'banner2.jpg',
        ]);
        return redirect('/blogs/' . $id);
    }
}