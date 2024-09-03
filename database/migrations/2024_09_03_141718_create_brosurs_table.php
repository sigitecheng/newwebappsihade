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
        Schema::create('brosurs', function (Blueprint $table) {
            $table->id();
            $table->string('daftar_merk');
            $table->string('nib');
            $table->string('surat_sihade');
            $table->string('brosur_sihade');
            $table->string('gambar_sihade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brosurs');
    }
};
