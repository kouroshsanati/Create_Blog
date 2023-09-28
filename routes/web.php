<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    dd(Comment::query()->find(11));
    return view('welcome', [
        'users' => User::with('posts')->get()
    ]);
});
Route::get('users/{user}/posts', function (User $user) {
    return view('user_posts',
        [
            'posts' => $user->posts
        ]);
});
//Route::get('/post/{post}', function (Post $post) {
//    return view('post', [
//        'post' => $post
//    ]);
//});
//Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create']);
//Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store']);
//Route::get('posts/{post}',[\App\Http\Controllers\PostController::class,'show']);
//Route::get('/posts/{post}/edit',[\App\Http\Controllers\PostController::class,'edit']);
//
//Route::patch('/posts/{post}',[\App\Http\Controllers\PostController::class,'update']);
//Route::delete('/posts/{post}',[\App\Http\Controllers\PostController::class,'destroy']);

Route::resource('posts', PostController::class);

