<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('p_title');
            $table->string('p_type');
            $table->integer('p_size');
            $table->integer('bed_rooms');
            $table->integer('bath_rooms');
            $table->string('imageName');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->integer('air_cond')->default(0);
            $table->integer('parking')->default(0);
            $table->integer('swimming')->default(0);
            $table->integer('seat')->default(0);
            $table->integer('alarm')->default(0);
            $table->integer('heat')->default(0);
            $table->integer('laundry')->default(0);
            $table->integer('win_cover')->default(0);
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('message');
            $table->string('building_age');
            $table->string('sell_type');
            $table->string('status')->default('available');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('properties');
    }
}
