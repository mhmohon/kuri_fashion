<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_code');
            $table->string('pro_name')->nullable();
            $table->string('pro_image');
            $table->text('pro_info');
            $table->string('pro_other_colors')->default('empty');
            $table->decimal('pro_price', 8, 2);
            $table->enum('pro_level', ['top', 'feature', 'trend','usual'])->default('usual');
            $table->string('pro_status')->default('0');
            $table->unsignedInteger('cat_id');
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('tbl_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
