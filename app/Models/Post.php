<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', "slug", "user_id"];
    protected $with = ['tags'];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::create($value)->format('F d, Y'),
        );
    }

    protected function scopeFilter($query, $filter)
    {
        return $query->when($filter["search"] ?? false, function ($query, $search) {
            return $query->where("title", "LIKE", "%$search%")
                ->orWhere("body", "LIKE", "%$search%");
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
