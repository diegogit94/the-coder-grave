<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Obtain a random register from user model
        $user = User::all()->random();

        return [
            'customer_name' => $user->name . " " . $user->surname,
            'customer_email' => $user->email,
            'customer_mobile' => $user->mobile,
            'product' => "USB Big Enter key Table Pillow for Angry Developers",
            'total' => 500,
            'status' => $this->faker->randomElement(['PAYED', 'FAILED', 'CREATED']),
            'user_id' => $user->id
        ];
    }
}
