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
            Schema::create('Buku', function (Blueprint $table) {
               $table->char('idBuku', 7)->primary();
            $table->string('judul', 100);
            $table->enum('genre', ['Drama', 'Action','Fantasi','Psikologi']);
            $table->date('tanggalTerbit');
            $table->char('noRak', 20); // Adjust the length as needed
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Buku');
    }
};
