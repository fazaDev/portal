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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Misal: "Visi Misi", "Struktur Organisasi", "Profil Kepala Dinas"
            $table->string('slug')->unique();
            $table->text('content'); // Isi lengkap profil
            $table->string('image')->nullable(); // Foto kepala dinas atau bagan struktur
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0); // Untuk pengurutan menu
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
