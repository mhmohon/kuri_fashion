<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('house_no')->nullable();
            $table->string('street_address')->nullable();
            $table->string('route');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('addresses');
    }
}
