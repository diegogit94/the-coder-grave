<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name', 80);
            $table->string('customer_email', 120);
            $table->string('customer_mobile', 40);
            $table->integer('total');
            $table->string('status', 20);
            $table->string('request_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
