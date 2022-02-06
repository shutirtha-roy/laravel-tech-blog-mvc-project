<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'title' => 'test',
            'content' => 'content',
            'image' => '1628112407-Java (programming language).jpg',
            'created_at' => '2021-08-04 15:26:47',
            'updated_at' => '2021-08-06 08:24:40',
            'user_id' => 0
        ];
    }
}
