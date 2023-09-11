<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tags = Tag::limit(10)->with('posts')->get();
        $posts = Post::orderBy('id')->limit(10)->get();
        // dd($posts);
        return Inertia::render('Admin/Dashboard', [
            "posts" => $posts->map(function ($post) {
                return [
                    "id" => $post->id,
                    "title" => $post->title,
                    "slug" => $post->slug,
                    "author" => $post->author->name,
                    "created_at" => $post->created_at,
                    "title" => $post->title,
                    "tags" => $post->tags->map(function ($tag) {
                        return [
                            "name" => $tag->name
                        ];
                    })
                ];
            }),
            "tags" => $tags->map(function ($tag) {
                return [
                    "id" => $tag->id,
                    "name" => $tag->name,
                    "post_count" => count($tag->posts)
                ];
            })
        ]);
    }
}
