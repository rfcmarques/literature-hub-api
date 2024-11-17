<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'isbn' => $this->faker->isbn13,
            'cover' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'pages' => $this->faker->numberBetween(100, 1000),
            'language' => $this->faker->languageCode,
            'publisher' => $this->faker->company,
            'published_at' => $this->faker->date(),
            'genre' => $this->faker->word,
        ];
    }
}
