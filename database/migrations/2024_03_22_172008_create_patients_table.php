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
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->char('nik', 16)->default(9999999999999999);
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('religion', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('address');
            $table->string('phone');
            $table->enum('marital_status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->enum('education', ['Tidak Sekolah', 'SD', 'SLTP Sederajat', 'SLTA Sedajarat', 'D1-D3 Sederajat', 'D4', 'S1', 'S2', 'S3']);
            $table->enum('job', ['Tidak Bekerja', 'PNS', 'TNI/POLRI', 'BUMN', 'Pegawai Swasta/Wirausaha', 'Lain-lain']);
            $table->enum('citizen', ['WNI', 'WNA']);
            $table->char('medical_record', 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
