<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
   // \App\Post::create(['title' => 'test title', 'content_2' => 'test content',]);

    /*$post = new \App\Post();
    $post->title = 'test title';
    $post->content_2 = 'test content';
    $post->save();*/

    /*$posts = \App\Post::all();
    dd($posts);*/

    /*$post = \App\Post::find(1);
    dd($post);*/

    /*$posts = \App\Post::where('id', '<', 10)
        ->orderBy('id', 'DESC')->get();
    dd($posts);*/

    /*$post = \App\Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content_2' => 'updated content',
    ]);*/

    /*$post = \App\Post::find(1);
    $post->title = 'saved title';
    $post->content_2 = 'saved content';
    $post->save();*/

    /*$post = \App\Post::find(1);
    $post->delete();*/

    /*\App\Post::destroy(2);*/

    \App\Post::destroy(3, 5, 7);
});