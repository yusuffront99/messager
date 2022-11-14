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
        Schema::create('ijins', function (Blueprint $table) {
            $table->id();
            $table->char('user_id');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('bagian');
            $table->string('hari');
            $table->date('tanggal');
            $table->string('keperluan');
            $table->string('ttd_image');
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
        Schema::dropIfExists('ijins');
    }
};
