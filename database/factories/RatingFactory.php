<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rating;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition()
    {
        return [
            'book_id' => $this->faker->numberBetween(1, 100000),
            'value' => $this->faker->numberBetween(1, 10),
        ];
    }
}
