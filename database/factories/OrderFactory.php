<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Obtain a random register from user model and the unique product on DB
        $user = User::all()->random();
        $product = Product::first();

        return [
            'customer_name' => $user->name . " " . $user->surname,
            'customer_email' => $user->email,
            'customer_mobile' => $user->mobile,
            'total' => $product->price,
            'status' => $this->faker->randomElement(['PAYED', 'FAILED', 'CREATED']),
            'user_id' => $user->id,
            'product_id' => $product->id
        ];
    }
}
