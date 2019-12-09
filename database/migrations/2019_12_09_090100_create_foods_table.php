<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('ingredients');
            $table->longText('steps');
            $table->unsignedBigInteger('duration');
            $table->unsignedBigInteger('food_type_id');
            $table->unsignedBigInteger('cuisine_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('food_type_id')->references('id')->on('Food_Types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cuisine_id')->references('id')->on('Cuisines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
