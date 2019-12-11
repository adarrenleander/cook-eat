<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('header_transaction_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->unsignedBigInteger('quantity');
            $table->timestamps();

            $table->foreign('header_transaction_id')->references('id')->on('Header_Transactions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detail_transactions');
    }
}
