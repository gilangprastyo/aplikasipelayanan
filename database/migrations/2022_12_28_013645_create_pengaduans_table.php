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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->text('isi_aduan');
            $table->string('gambar');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->string('keterangan')->nullable();
            $table->timestamps();
            // $table->foreign('pengguna_id')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
