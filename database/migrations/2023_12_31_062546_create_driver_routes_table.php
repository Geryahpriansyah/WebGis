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
        Schema::create('driver_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_orders_id');
            $table->unsignedBigInteger('pesan_id');
            $table->string('koordinat_awal');
            $table->string('koordinat_akhir');
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_selesai');
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
        Schema::dropIfExists('driver_routes');
    }
};
