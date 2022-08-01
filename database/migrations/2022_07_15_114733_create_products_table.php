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
            $table->string('product_name');
            $table->unsignedInteger('product_price');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('engine_cubature')->nullable();
            $table->text('engine')->nullable();
            $table->string('engine_cooling')->nullable();
            $table->string('wheels')->nullable();
            $table->string('product_color')->nullable();
            $table->string('part_number')->nullable();
            $table->boolean('availability')->default(1);
            $table->text('description')->nullable();
            $table->string('img_path')->nullable();
            $table->unsignedInteger('packed_weight')->nullable();
            $table->unsignedFloat('power')->nullable();
            $table->text('transmission')->nullable();
            $table->text('fuel_supply_system')->nullable();
            $table->text('front_suspension')->nullable();
            $table->text('back_suspension')->nullable();
            $table->text('front_brake')->nullable();
            $table->text('back_brake')->nullable();
            $table->text('length_width_height')->nullable();
            $table->unsignedInteger('base_length')->nullable();
            $table->unsignedInteger('saddle_height')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedFloat('tank_capacity')->nullable();
            $table->unsignedBigInteger('num_of_sales');
            $table->timestamps();
            $table->softDeletes();
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
