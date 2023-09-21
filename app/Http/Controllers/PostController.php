<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
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

    public function edit(Post $post)
    {
        return view('edit',['post' => $post]);
    }

    public function update(Post $post)
    {
        $validated = request()->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        $post->update($validated);
        return redirect()->to("/posts/{$post->id}/edit");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->to('/posts');
    }
}
