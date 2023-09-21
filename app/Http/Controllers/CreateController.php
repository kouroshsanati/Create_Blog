<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CreateController extends Controller
{
    public function createPost()
    {
        $validated = request()->validate([
            'title' => ['required'],
            'content' => ['required'],
            'user_id' => ['required']
        ]);
        Post::create($validated);
        return view('create');
    }

    public function createPage()
    {
        return view('create');
    }
}
