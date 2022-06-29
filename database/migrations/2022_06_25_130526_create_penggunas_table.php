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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('paket');
            $table->string('nama');
            $table->string('tempat');
            $table->string('tagihan');
            $table->string('status_tagihan');
            $table->bigInteger('nomor_hp')->nullable(true);
            $table->string('keterangan');
            $table->timestamps();

            // $table->foreign('internet_id')->references('id')->on('internets')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
};
