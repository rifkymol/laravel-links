<?php

namespace Database\Factories;

use App\Link;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\link>
 */
class LinkFactory extends Factory
{
    /**
     *
     * The name of the factory's corresponding model.
     *
     */

     protected $model = \App\Models\Link::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => substr($this->faker->sentence(2), 0 , -1),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}
