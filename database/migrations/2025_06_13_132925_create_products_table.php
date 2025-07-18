<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gambar')->nullable(); 
            $table->text('description')->nullable();
            $table->enum('category', ['rumput_laut', 'ikan', 'mete', 'lainnya']);
            $table->enum('type', ['mentah', 'olahan']);
            $table->text('link')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};