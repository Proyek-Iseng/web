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
            $table->uuid()->primary();
            $table->string('name');
            $table->string('slug');
            $table->enum('gender', ['male', 'female']);
            $table->char('nik', 13)->default(9999999999999);
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('religion', ['Islam', 'Christian', 'Catholic', 'Hindu', 'Buddha', 'Confucian']);
            $table->string('address');
            $table->string('phone');
            $table->enum('marital_status', ['Single', 'Marry', 'Divorce', 'Death Divorce']);
            $table->enum('education', ['Tidak Sekolah', 'SD', 'SLTP Sederajat', 'SLTA Sedajarat', 'D1-D3 Sederajat', 'D4', 'S1', 'S2', 'S3']);
            
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
