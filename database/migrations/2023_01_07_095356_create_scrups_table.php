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
        Schema::create('scrup', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('nomor_inventaris');
            $table->integer('id_user');
            $table->text('lokasi_pengguna');
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
        Schema::dropIfExists('scrup');
    }
};
