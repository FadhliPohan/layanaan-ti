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
        Schema::create('sperpat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_inventaris');
            $table->string('qty');
            $table->date('tanggal_pembalian');
            $table->integer('jenis_barang');
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
        Schema::dropIfExists('sperpat');
    }
};
