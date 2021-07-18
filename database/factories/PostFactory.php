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
            'title'          => $this->faker->words(2, true),
            'description'    => $this->faker->sentence(6, true),
            'body'           => $this->faker->sentences(6, true),
            'img'            => $this->faker->imageUrl('400', '200'),
            'status'         => $this->faker->randomElement(['favorite', 'ordinary']),
            'locale_id'      => $this->faker->numberBetween(1,2),
        ];
    }
}
