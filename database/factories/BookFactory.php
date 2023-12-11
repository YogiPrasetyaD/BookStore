<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'author_id' => $this->faker->numberBetween(1, 1000),
            'category_id' => $this->faker->numberBetween(1, 3000),
        ];
    }
}
