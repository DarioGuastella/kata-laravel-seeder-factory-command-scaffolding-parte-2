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
            'category_id' => $this->faker->randomElement($category_ids),
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->paragraphs(4, true),
            'image' => $this->faker->imageUrl(640, 480, 'café', true),
            'isbn' => $this->faker->randomNumber(7, true) . $this->faker->randomNumber(6, true),
            'price' => $this->faker->randomFloat(2, 20, 100),
            'featured' => $this->faker->boolean(5), // Imposta featured con probabilità del 5%
        ];
    }
}
