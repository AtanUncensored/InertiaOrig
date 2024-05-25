<?php

namespace Database\Factories;

use App\Models\Genre;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
            'title' => fake()->words(3, true),
            'director' => fake()->words(3, true),
            'description' => fake()->sentence(),
            'release_date' => fake()->date(),
            'genre_id' => Genre::pluck('id')->random(),
                    ];
            }
}
