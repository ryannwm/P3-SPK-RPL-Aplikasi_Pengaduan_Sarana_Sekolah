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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('siswa_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->string('nisn', 10);
            $table->string('kelas', 10);
            $table->enum('jurusan', ['TKJ','RPL', 'TKR', 'TSM', 'TOI', 'TPTU', 'AK', 'PF']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
