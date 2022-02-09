<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'USB Big Enter key Table Pillow for Angry Developers',
            'description' => 'A big pillow to release all your coder rage',
            'price' => 500
        ];
    }
}
