<?php

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
Route::get('/post/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});
Route::get('/create',function (){
    return view('create');
});
Route::post('/create',function (){
    $validated=request()->validate([
        'title'=>['required'],
        'content'=>['required'],
        'user_id'=>['required']
    ]);

});
