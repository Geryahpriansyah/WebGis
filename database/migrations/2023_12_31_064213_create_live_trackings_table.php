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
        Schema::create('live_trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('driver_orders_id');
            $table->unsignedBigInteger('pesan_id');
            $table->integer('koordinat');
            $table->datetime('waktu terkini');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('driver_orders_id')->references('id')->on('driver_orders')->onDelete('cascade');
            $table->foreign('pesan_id')->references('id')->on('pesans')->onDelete('cascade');
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
        Schema::dropIfExists('live_trackings');
    }
};
