<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id' => function() {
                return factory(Post::class)->create()->id;
            },
            'body' => $this->faker->paragraph()
        ];
    }
}
