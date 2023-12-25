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
        Schema::create('grooming', function (Blueprint $table) {
            $table->bigIncrements('id_grooming');
            $table->string('jenis_hewan', 100);
            $table->string('nama_hewan', 100);
            $table->date('tanggal_pemesanan');
            $table->bigInteger('biaya');
            $table->timestamps();

            $table->foreign('id_grooming')->references('id_cust')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grooming');
    }
};