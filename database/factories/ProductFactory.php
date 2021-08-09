<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $width = 2000;
        $height = 3000;
        return [
            "Name" => $this->faker->name(),
            'Image' => $this->faker->imageUrl($width, $height, 'cats'),
            'Short description' => $this->faker->sentence,
            'Description' => $this->faker->paragraph,
            "Price" => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
