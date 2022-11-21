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
            $table->bigInteger('costumer_id');
            $table->unsignedBigInteger('user_id');
            $table->string('paket');
            $table->string('nama');
            $table->string('tempat');
            $table->bigInteger('tagihan');
            $table->string('router');
            $table->string('teknisi');
            $table->string('status_tagihan');
            $table->bigInteger('nomor_hp')->nullable(true);
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
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
