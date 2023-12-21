<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;

    use Likable;

    // public function like($user = null)
    // {
    //     $user = $user ?: auth()->user();

    //     return $this->likes()->attach($user);
    // }

    // public function likes()
    // {
    //     return $this->morphToMany(User::class, 'likable')->withTimestamps();
    // }

    // protected $guarded = [];

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class)->withTimestamps();

    //     //Personal, Family, Vacation
    // }
}


/*
    -Posts
        -id
        -title
        -body
    
    -users
        -id

    -pivot(post_user)
        -user_id
        -post_id
*/