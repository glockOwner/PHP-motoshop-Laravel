<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name,
            'product_price' => $this->faker->numberBetween(50000, 400000),
            'brand_id' => Brand::get()->random()->id,
            'engine_cubature' => $this->faker->numberBetween(125, 450),
            'type_id' => Type::get()->random()->id,
            'engine' => $this->faker->sentence,
            'engine_cooling' => $this->faker->word,
            'wheels' => $this->faker->word,
            'product_color' => $this->faker->colorName,
            'part_number' => $this->faker->numerify,
            'img_path' => $this->faker->imageUrl,
            'availability' => $this->faker->numberBetween(0,1),
            'description' => $this->faker->sentence,
            'packed_weight' => $this->faker->numberBetween(100, 200),
            'power' => $this->faker->numberBetween(8, 65),
            'transmission' => $this->faker->sentence,
            'fuel_supply_system' => $this->faker->word,
            'front_suspension' => $this->faker->word,
            'back_suspension' => $this->faker->word,
            'front_brake' => $this->faker->word,
            'back_brake' => $this->faker->word,
            'length_width_height' => $this->faker->numberBetween(10, 100) . $this->faker->numberBetween(10, 100) . $this->faker->numberBetween(10, 100),
            'base_length' => $this->faker->numberBetween(10, 100),
            'saddle_height' => $this->faker->numberBetween(10, 100),
            'weight' => $this->faker->numberBetween(90, 200),
            'tank_capacity' => $this->faker->numberBetween(0, 11),
            'num_of_sales' => $this->faker->randomDigitNotNull,
        ];
    }
}
