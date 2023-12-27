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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('burgers_id');
            $table->unsignedBigInteger('drinks_id');
            $table->integer('Total Price');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pizza_id')->references('id')->on('pizza')->onDelete('cascade');
            $table->foreign('burgers_id')->references('id')->on('burgers')->onDelete('cascade');
            $table->foreign('drinks_id')->references('id')->on('drinks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
