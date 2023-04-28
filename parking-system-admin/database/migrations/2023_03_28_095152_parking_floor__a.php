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
        Schema::create('parking_floor_a_s', function (Blueprint $table) {
            $table->id();
            $table->integer('parking_id');
            $table->timestamp('time_parking')->time();
            $table->timestamp('time_end')->nullable();
            $table->boolean('isAvailable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkingFloorA');
    }
};
