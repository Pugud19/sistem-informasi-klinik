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
        Schema::create('cicilans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_barang');
            $table->string('type');
            $table->string('cicilan_perbulan');
            $table->string('total_angsuran');
            $table->string('total_tagihan');
            $table->string('sudah_dibayar');
            $table->string('sisa_angsuran');
            $table->bigInteger('sisa_uang');
            $table->bigInteger('denda');
            $table->string('tanggal_pembayaran');
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
        Schema::dropIfExists('cicilans');
    }
};
