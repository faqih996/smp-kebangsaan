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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('no_sk_akreditasi')->nullable();
            $table->string('status_sk_akreditasi')->nullable();
            $table->string('jenjang_pendidikan')->nullable();
            $table->string('sk_pendirian')->nullable();
            $table->string('tgl_sk_pendirian')->nullable();
            $table->string('sk_operasional')->nullable();
            $table->string('tgl_sk_operasional')->nullable();
            $table->string('description');
            $table->string('address');
            $table->string('maps')->nullable();
            $table->string('jumlah_siswa');
            $table->string('phone');
            $table->string('email');
            $table->string('thumbnail');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
