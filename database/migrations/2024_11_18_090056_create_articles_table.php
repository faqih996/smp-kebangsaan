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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('slug');
            $table->string('description');
            $table->enum('is_featured', ['featured', 'not_featured'])->default('not_featured');
            $table->string('thumbnails1');
            $table->string('thumbnails2')->nullable();
            $table->string('thumbnails3')->nullable();
            $table->string('thumbnails4')->nullable();
            $table->string('thumbnails5')->nullable();
            $table->string('path_video')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};