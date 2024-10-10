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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('no_pasien')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->enum('jenis_kelamin',['L','P'])->default('L');
            $table->string('umur')->nullable();
            $table->text('rekam_medis')->nullable();
            $table->string('treatment')->nullable();
            $table->string('rujukan')->nullable();
            $table->string('dokter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
