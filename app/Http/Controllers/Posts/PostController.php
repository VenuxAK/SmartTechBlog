<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            "posts" => Post::latest()->get()->map(fn ($post) => [
                "id" => $post->id,
                "title" => $post->title,
                "slug" => $post->slug,
                "body" => $post->body,
                "tags" => $post->tags,
                "created_at" => $post->created_at,
            ])
        ]);
    }

    public function show(Post $post)
    {
        $post = [
            "id" => $post->id,
            "title" => $post->title,
            "body" => $post->body,
            "created_at" => $post->created_at,
            "slug" => $post->slug,
            "tags" => $post->tags ?  $post->tags->map(function ($tag) {
                return $tag->name;
            }) : NULL,
            "author" => [
                "name" => $post->author->name,
                "username" => $post->author->username,
                "email" => $post->author->email,
                "avatar" => $post->author->avatar,
            ]
        ];
        return Inertia::render('ShowPost', [
            "post" => $post
        ]);
    }

    public function posts()
    {
        return Inertia::render('Posts', [
            "posts" => Post::orderBy('id', 'desc')->paginate(5)->withQueryString()->through(fn ($post) => [
                "id" => $post->id,
                "title" => $post->title,
                "slug" => $post->slug,
                "body" => $post->body,
                "tags" => $post->tags,
                "created_at" => $post->created_at
            ]),
            "tags" => Tag::with('posts')->get()
        ]);
    }
}
