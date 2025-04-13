<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->words(rand(2, 5), true);
        $price = fake()->randomFloat(2, 100000, 50000000);
        $hasSale = fake()->boolean(30);

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraphs(5, true),
            'price' => $price,
            'sale_price' => $hasSale ? $price * fake()->randomFloat(2, 0.7, 0.95) : null,
            'quantity' => fake()->numberBetween(0, 100),
            'sku' => strtoupper(Str::random(8)),
            'is_active' => true,
            'is_featured' => fake()->boolean(20),
            'thumbnail' => 'https://via.placeholder.com/600x400',
        ];
    }
}
