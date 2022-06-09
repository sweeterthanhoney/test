<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_city');
            $table->string('customer_province');
            $table->string('customer_phone');
            $table->string('customer_email')->unique();
            $table->string('customer_location')->unique();
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
        Schema::dropIfExists('customers');
    }
}
