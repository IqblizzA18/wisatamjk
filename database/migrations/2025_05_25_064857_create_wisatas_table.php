<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->text('paragraph_1')->nullable();
            $table->text('paragraph_2')->nullable();
            $table->text('paragraph_3')->nullable();
            $table->text('paragraph_4')->nullable();
            $table->text('paragraph_5')->nullable();
            $table->text('google_maps_url')->nullable();
            $table->string('opening_hours')->nullable();
            $table->float('rating', 2, 1)->default(0); // input manual
            $table->unsignedInteger('visit_count')->default(0); // bertambah otomatis
            $table->foreignId('jenis_wisata_id')->constrained('jenis_wisatas')->onDelete('cascade');
            $table->timestamp('uploaded_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};
