<?php

use App\Http\Controllers\Posts\PostController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);
Route::get('/posts', [PostController::class, "posts"]);
Route::get('/tags', function () {
    return Inertia::render('Tags', [
        "tags" => Tag::with('posts')->get()
    ]);
});
Route::get('/tags/{tag:name}', function (Tag $tag) {
    return Inertia::render('ShowTag', [
        "tags" => Tag::with('posts')->get(),
        "tagPosts" => $tag->where('name', $tag->name)->with('posts')->first()
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});
