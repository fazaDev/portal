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
        Schema::create('hero_sliders', function (Blueprint $table) {
            $table->id();
             $table->string('title')->nullable(); // Judul Overlay pada gambar
            $table->string('subtitle')->nullable(); // Subtitle / Deskripsi singkat
            $table->string('image'); // Path gambar slider
            $table->string('link')->nullable(); // Link jika slider diklik (misal ke berita tertentu)
            $table->string('button_text')->nullable(); // Teks tombol (misal: "Baca Selengkapnya")
            
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0); // Urutan slide

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sliders');
    }
};
