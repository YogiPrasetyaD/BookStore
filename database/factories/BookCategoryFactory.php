<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BookCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookCategory>
 */
class BookCategoryFactory extends Factory
{
    protected $model = BookCategory::class;

    public function definition()
    {
        return [
            'category' => $this->faker->word,
        ];
    }
}
