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
        Schema::create('cuti_tahunans', function (Blueprint $table) {
            $table->id();
            $table->char('user_id');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('bagian');
            $table->date('hak_cuti');
            $table->date('mulai_tgl');
            $table->date('sampai_tgl');
            $table->string('sudah');
            $table->string('akan');
            $table->string('sisa');
            $table->string('no_hp');
            $table->string('alamat');
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
        Schema::dropIfExists('cuti_tahunans');
    }
};
