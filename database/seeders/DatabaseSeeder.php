<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::factory()->create(['email' => 'gravemaster666@admin.com', 'is_admin' => true]);
        Product::factory()->create();
        Order::factory(40)->create();
    }
}
