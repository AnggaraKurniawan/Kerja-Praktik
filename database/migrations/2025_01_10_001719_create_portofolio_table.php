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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gambar_porto');
            $table->string('judul_porto');
            $table->string('sampah_terkumpul')->nullable();
            $table->string('jadwal_pengangkutan')->nullable();
            $table->date('tanggal_acara')->nullable();
            $table->string('perkiraan_peserta')->nullable();
            $table->text('isi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios'); // Corrected table name
    }
};
