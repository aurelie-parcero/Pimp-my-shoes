<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2014_10_12_100000_create_password_resets_table.php
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email', 60)->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
=======
        Schema::create('orders_products', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity');
>>>>>>> dev:database/migrations/2020_03_06_142541_create_order__products_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
