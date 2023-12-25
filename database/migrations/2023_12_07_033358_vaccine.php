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
        Schema::create('vaccine', function (Blueprint $table) {
            $table->bigInteger('id_vaksin')->unsigned();
            $table->string('jenis_hewan', 100);
            $table->string('tipe_vaksin' , 100);
            $table->string('nama_hewan');
            $table->date('tanggal_pemesanan');
            $table->bigInteger('biaya');
            $table->timestamps();

            $table->foreign('id_vaksin')->references('id_cust')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine');
    }
};
