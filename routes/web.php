<?php

use App\Models\Post;
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
    return view('welcome');
});
//Route::get('/post/{post}', function (Post $post) {
//    return view('post', [
//        'post' => $post
//    ]);
//});
Route::get('/create', [\App\Http\Controllers\CreateController::class,'createPage']);
Route::post('/create', [\App\Http\Controllers\CreateController::class, 'createPost']);
