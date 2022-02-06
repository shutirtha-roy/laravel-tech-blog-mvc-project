<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    use RefreshDatabase;

    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_name' => $this->faker->name,
        ];
    }
}
