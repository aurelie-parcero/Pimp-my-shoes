<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->string('adress');
            $table->integer('phone');
            $table->timestamps();
        });
<<<<<<< HEAD:database/migrations/2020_03_06_100806_create_clients_table.php

        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
        });

=======
>>>>>>> dev:database/migrations/2020_03_06_135254_create_clients_table.php
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
