<?php

namespace App\Http\Controllers;

class CreateController extends Controller
{
    public function createPost()
    {
        $validated = request()->validate([
            'title' => ['required'],
            'content' => ['required'],
            'user_id' => ['required']
        ]);

    }

    public function createPage()
    {
        return view('create');
    }
}
