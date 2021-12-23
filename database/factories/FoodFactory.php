<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(15),
            'description' => $this->faker->sentence(80),
            'food_image' => public_Path('/images/pizza.jpeg'),
            'food_type' => 'bun',
            'food_category' => 'breakfast',
            'quantity' => 3,
            'old_price' => 5.99,
            'new_price' => 3.99,
        ];
    }
}
