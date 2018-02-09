<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name')->nullable();
            $table->string('pro_image');
            $table->text('pro_info');
            $table->string('pro_color');
            $table->string('pro_other_colors')->default('empty');
            $table->integer('pro_price');
            $table->float('pro_weight', 8, 2)->nullable();
            $table->string('pro_size');
            $table->enum('pro_level', ['top', 'feature', 'trend','usual'])->default('usual');
            $table->string('pro_status')->default('0');
            $table->unsignedInteger('product_id');
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
        Schema::dropIfExists('product_details');
    }
}
