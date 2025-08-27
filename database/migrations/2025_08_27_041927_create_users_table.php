<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                                   // Primary key
            $table->string('name');                         // Nama kategori
            $table->string('slug')->unique();               // Slug unik
            $table->text('description')->nullable();        // Deskripsi kategori (opsional)
            $table->enum('status', ['active', 'inactive'])  // Status kategori
                  ->default('active')->index();             // Default active
            $table->timestamps();                           // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
