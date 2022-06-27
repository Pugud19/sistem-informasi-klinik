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
        Schema::create('masa_aktifs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id', false, true);
            $table->bigInteger('internet_id', false, true);
            $table->string('nama');
            $table->date('awal_paket');
            $table->date('akhir_paket');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('internet_id')->references('id')->on('internets')->onDelete('cascade');
        });

        // Schema::table('masa_aktifs', function (Blueprint $table) {
        //     $table->foreign('pengguna_id')->references('id')->on('penggunas')->onDelete('cascade');
        //     $table->foreign('internet_id')->references('id')->on('internets')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masa_aktifs');
    }
};
