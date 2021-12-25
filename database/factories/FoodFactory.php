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
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'food_description' => $this->faker->sentence(40),
            'food_category' => 'bun',
            'food_image' => public_Path('/images/pizza.jpeg'),
            'food_type' => 'breakfast',
            'old_price' => 90.00,
            'new_price' => 10.00
        ];
    }
}
