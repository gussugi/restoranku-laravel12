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
            'img' => fake()->randomElement([
                'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38',
                'https://images.unsplash.com/photo-1609951651556-5334e2706168',
                'https://images.unsplash.com/photo-1633436375795-12b3b339712f',
                'https://images.unsplash.com/photo-1532636875304-0c89119d9b4d',
                'https://images.unsplash.com/photo-1653542772393-71ffa417b1c4',
            ]),
            'is_active' => $this->faker->boolean(90),
            
        ];
    }
}
