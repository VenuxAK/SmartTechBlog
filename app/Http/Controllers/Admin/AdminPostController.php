<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StorePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('author')->orderBy('id', 'desc')->paginate(10)->withQueryString();
        return Inertia::render('Admin/Posts/Index', [
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Posts/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePostRequest $request)
    public function store(StorePostRequest $request)
    {

        // Store post
        $post = Post::create([
            "title" => $request->title,
            "slug" => str()->slug($request->title),
            "body" => $request->body,
            "user_id" => auth()->user()->id,
        ]);

        // Store new tag
        $requestTags = $request->tags;
        $existingTags = Tag::whereIn('name', $requestTags)->get();
        $newTags = collect($requestTags)->diff($existingTags->pluck('name')->toArray());
        foreach ($newTags as $newTag) {
            $tag = new Tag(['name' => $newTag]);
            $tag->save();
            $existingTags->push($tag);
        }

        // Relationship
        // Add tag_id and post_id in post_tag table
        $existingTags->each(function ($tag) use ($post) {
            DB::table('post_tag')->insert([
                'post_id' => $post->id,
                'tag_id' => $tag->id
            ]);
        });

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return Inertia::render('Admin/Posts/Show', [
            "post" => [
                "title" => $post->title,
                "body" => $post->body,
                "tags" => $post->tags ? $post->tags->map(function ($tag) {
                    return $tag->name;
                }) : NULL,
                "created_at" => $post->created_at,
                "author" => [
                    "name" => $post->author->name
                ]
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->with('author')->first();
        // dd($post);

        return Inertia::render('Admin/Posts/Edit', [
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => ["required", "string", "max:255"],
            "body" => ["required"]
        ]);

        // Update post
        Post::where("id", $id)->update([
            "title" => $request->title,
            "slug" => str()->slug($request->title),
            "body" => $request->body,
        ]);

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/admin/posts');
    }
}
