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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('model');
            $table->text('description');
            $table->string('condition');
            $table->integer('age');
            $table->bigInteger('min_price');
            $table->bigInteger('max_price');
            $table->timestamp('end_time')->date_format('l jS \of F Y h:i:s a');
            $table->boolean('is_active')->default(true);
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('products');
    }
};
