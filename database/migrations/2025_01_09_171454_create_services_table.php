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
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user')->nullable(); // Gunakan unsignedBigInteger dan nullable
        $table->timestamps();
        $table->string('gambar');
        $table->string('judul');
        $table->text('deskripsi'); // Gunakan text jika deskripsi bisa panjang
        $table->date('tanggal_acara')->nullable();
        $table->string('perkiraan_peserta')->nullable();
        $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Contoh penggunaan enum

        $table->foreign('id_user')->references('id')->on('users')->onDelete('set null'); // Foreign key constraint
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services'); // Ubah nama table menjadi services
    }
};
