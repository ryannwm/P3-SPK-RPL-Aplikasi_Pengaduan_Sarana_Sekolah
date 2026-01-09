<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('aspirasi_id');
            $table->foreignId('siswa_id')->constrained('siswa', 'siswa_id');
            $table->foreignId('kategori_id')->constrained('aspirasi_kategori', 'kategori_id');
            $table->string('lokasi', '50');
            $table->string('keterangan','50');
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->string('umpan_balik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasi');
    }
};
