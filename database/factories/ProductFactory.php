<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition( )
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence(10),
            'price'=>$this->faker->numberBetween(100 , 5000),

        ];
    }
}
