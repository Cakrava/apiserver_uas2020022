<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Builder\Enum_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
               $table->char('IdGuru', 7)->primary();
            $table->string('NamaGuru', 100);
            $table->enum('JenisKelamin', ['L', 'P']);
            $table->string('TempatLahir', 100);
            $table->date('TanggalLahir');
            $table->text('Alamat', 100);
            $table->char('Nohp', 20); // Adjust the length as needed
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
