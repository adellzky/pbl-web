<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id_orders');
            $table->bigInteger('id_cust')->unsigned();
            $table->string('pemesanan',255);
            $table->bigInteger('harga');
            $table->string('status_pesanan');
            $table->timestamps();

            $table->foreign('id_cust')->references('id_cust')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
