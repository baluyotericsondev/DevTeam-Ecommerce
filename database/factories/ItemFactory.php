<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => fake()->word(),
            'product_price' => fake()->numberBetween($min = 100, $max = 1000),
            'product_image' => fake()->imageUrl($width = 640, $height = 480),
            'product_description' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'product_category' => fake()->word(),
            'product_quantity' => fake()->randomDigit(),
            'product_discount' => fake()->randomDigit(),
            'remember_token' => Str::random(10),
        ];
    }
}
