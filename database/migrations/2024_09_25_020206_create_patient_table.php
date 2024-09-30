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
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir', 64)->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_kartu_bpjs', 64)->nullable();
            $table->string('no_hp', 16)->nullable();
            $table->string('dokter', 64)->nullable();
            $table->string('golongan_darah', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
