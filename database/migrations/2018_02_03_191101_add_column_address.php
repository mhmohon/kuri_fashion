<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('house_no')->nullable()->after('id');
            $table->string('state')->nullable()->after('city');
            $table->string('country')->nullable()->after('state');
            $table->string('latitude')->nullable()->after('country');
            $table->string('longitude')->nullable()->after('latitude');
            $table->string('street_address')->nullable()->change();
            $table->renameColumn('region', 'route');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
        });
    }
}
