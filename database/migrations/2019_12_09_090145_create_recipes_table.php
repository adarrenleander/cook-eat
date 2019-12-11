<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->unsignedBigInteger('quantity');
            $table->timestamps();

            $table->foreign('food_id')->references('id')->on('Foods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ingredient_id')->references('id')->on('Ingredients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
