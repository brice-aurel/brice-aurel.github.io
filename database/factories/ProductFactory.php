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
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
            'price' => $this->faker->numberBetween(100, 750),
            'image' => $this->faker->imageUrl(300, 300, 'animals', true),
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
