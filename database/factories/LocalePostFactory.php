<?php

namespace Database\Factories;

use App\Models\LocalePost;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalePostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LocalePost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'locale_id'  => $this->faker->numberBetween(1,2),
            'post_id'    => $this->faker->unique()->numberBetween(1,10)
        ];
    }
}
