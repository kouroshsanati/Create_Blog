<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('index', [
            'posts' => Post::all()
        ]);
    }

    public function store(CreatePostRequest $request)
    {
        $validated = $request->validated();
        Post::query()->create($validated);
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
        return view('edit', ['post' => $post]);
    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        $validated = $request->validated();
        $post->update($validated);
        return redirect()->to("/posts/{$post->id}/edit");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->to('/posts');
    }
}
