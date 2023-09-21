<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CreateController extends Controller
{

    public function index()
    {
        return view('index', [
            'posts' => Post::all()
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required'],
            'content' => ['required'],
            'user_id' => ['required']
        ]);
        Post::create($validated);
        return view('create');
    }

    public function create()
    {
        return view('create');
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post
        ]);

    }
}
