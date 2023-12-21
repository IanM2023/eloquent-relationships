<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        // Many to many relationships
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
