<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class LikingTest extends TestCase
{

    // use refreshDabase;

    public function a_post_can_be_liked()
    {
        $this->actingAs(factory(User::class)->create());

        $post = factory(Post::class)->create();

        $post->like();

        $this->assertCount(1, $post->likes);
        $this->assertTrue($post->likes->contains('id', auth()->id()));
    }

    public function a_comment_can_be_liked()
    {
        $this->actingAs(factory(User::class)->create());

        $comment = factory(Comment::class)->create();

        $comment->like();

        $this->assertCount(1, $comment->likes);

    }

}
