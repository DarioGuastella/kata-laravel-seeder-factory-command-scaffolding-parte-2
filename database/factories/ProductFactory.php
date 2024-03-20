<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $category_ids = Category::all()->pluck('id');

        return [
            'category_id' => fake()->randomElement($category_ids),
            'name' => fake()->words(2, true),
            'description' => fake()->paragraphs(4, true),
            'image' => fake()->imageUrl(640, 480, 'café', true),
            'isbn' => fake()->randomNumber(7, true) . fake()->randomNumber(6, true),
            'price' => fake()->randomFloat(2, 20, 100),
            'featured' => fake()->boolean(50) && fake()->numberBetween(1, 5),
        ];
    }
}
