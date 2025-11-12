<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->numberBetween(1000, 100000),
            'description' => $this->faker->sentence(),
            'img' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
