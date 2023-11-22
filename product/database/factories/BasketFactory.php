<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use App\Models\Basket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Basket>
 */
class BasketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'item_id'=> Product::all()->random()->item_id,
            'user_id'=> User::all()->random()->id
        ];
    }
}
