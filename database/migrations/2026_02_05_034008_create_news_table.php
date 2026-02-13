<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Penulis berita

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable(); // Gambar utama berita
            $table->text('excerpt')->nullable(); // Ringkasan singkat
            $table->longText('content'); // Isi berita lengkap

            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->integer('views')->default(0);

            // SEO Fields
            $table->string('meta_title')->nullable(); // Custom judul untuk SEO (jika beda dari title)
            $table->text('meta_description')->nullable(); // Meta description untuk search engine
            $table->string('meta_keywords')->nullable(); // Meta keywords untuk SEO
            $table->string('og_image')->nullable(); // Open Graph image untuk social media sharing

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
