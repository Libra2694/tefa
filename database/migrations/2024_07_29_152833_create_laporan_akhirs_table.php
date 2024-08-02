<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanAkhirsTable extends Migration
{
    public function up()
    {
        Schema::create('laporan_akhirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->date('tanggal_upload');
            $table->enum('jenis_laporan_akhir', ['penelitian kualitatif', 'penelitian pengembangan', 'pengabdian masyarakat']);
            $table->enum('jenis', ['penelitian', 'pengabdian']);
            $table->string('file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_akhirs');
    }
}