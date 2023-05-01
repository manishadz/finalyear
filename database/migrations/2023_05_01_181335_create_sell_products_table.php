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
        Schema::create('sell_products', function (Blueprint $table) {
            $table->id();
            $table->integer('battery_power');
            $table->boolean('bluetooth');
            $table->integer('clock_speed');
            $table->boolean('dual_sim');
            $table->integer('frontcamera');
            $table->boolean('4g');
            $table->integer('internal_memory');
            $table->integer('mobile_weight');
            $table->integer('number_of_cores');
            $table->integer('pixel_height');
            $table->integer('ram');
            $table->integer('screen_height');
            $table->integer('screen_weight');
            $table->integer('talk_time');
            $table->integer('pixel_height');
            $table->boolean('touch_screen');


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
        Schema::dropIfExists('sell_products');
    }
};
