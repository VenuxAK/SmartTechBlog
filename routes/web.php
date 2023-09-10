<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Posts\PostController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Auth
Route::post('/signup', [AuthController::class, "signup"]);
Route::post('/signin', [AuthController::class, "signin"]);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, "logout"]);
});


Route::middleware('is_admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, "index"]);

    Route::resource('/posts', AdminPostController::class);

    Route::resource('/tags', AdminTagController::class);

    Route::resource('/users', UserController::class);

    Route::get('/profile', [UserController::class, "profile"]);
});
