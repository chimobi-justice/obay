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
            'food_description' => $this->faker->sentence(200),
            'food_category' => 'bun',
            'food_image' => 'images/pizza.jpeg',
            'food_type' => 'breakfast',
            'old_price' => money_format(100, 2),
            'new_price' => money_format(100, 2)
        ];
    }
}
