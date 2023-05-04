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
        Schema::create('product_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->integer('battery_power');
            $table->boolean('blue');
            $table->double('clock_speed');
            $table->boolean('dual_sim');
            $table->integer('fc');
            $table->boolean('four_g');
            $table->integer('int_memory')->nullable();
            $table->integer('mobile_wt');
            $table->integer('n_cores');
            $table->integer('ram');
            $table->integer('sc_h');
            $table->integer('sc_w');
            $table->integer('talk_time');
            $table->integer('px_height');
            $table->boolean('touch_screen');
            $table->boolean('px_width');
            $table->boolean('wifi');
            $table->integer('m_dep');
            $table->boolean('pc');
            $table->boolean('three_g');
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
        Schema::dropIfExists('product_conditions');
    }
};
