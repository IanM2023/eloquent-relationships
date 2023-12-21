<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //  $user->profile->github_url
    public function profile()
    {

        return $this->hasOne(Profile::class);
    }

    // public function experience()
    // {
    //     return $this->hasOne(Experience::class);
    // }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // public function jobs()
    // {
    //     return $this->hasMany(Job::class);
    // }

    // public function tasks()
    // {
    //     return $this->hasMany(Task::class);
    // }

    // public function achievements()
    // {
    //     // name => Read first blod post
    //     // user_id => 2
    //     return $this->hasMany(Achievement::class);
    // }

    
}

/*
    Examples of One to Many
    - A User can have many posts
    - A Post can have many comments
    - A Project can have many tasks
    - A User can have many jobs
    - A User can have many achievements

*/