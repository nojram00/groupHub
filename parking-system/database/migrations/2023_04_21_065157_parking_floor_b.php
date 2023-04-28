<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkingfloorb', function (Blueprint $table) {
            $table->id();
            $table->integer('parking_id');
            $table->timestamp('time_parking')->time();
            $table->timestamp('time_end')->nullable();
            $table->boolean('isAvailable');
            $table->integer('plate_number');
            $table->string('parked_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parkingfloorb', function (Blueprint $table) {
            //
        });
    }
};
