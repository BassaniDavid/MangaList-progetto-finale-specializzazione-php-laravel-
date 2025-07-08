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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();

            $table->string('titolo');
            $table->string('autore');
            $table->text('descrizione');
            $table->text('url_copertina');
            $table->string('editore');
            $table->string('status');
            $table->string('numero_volumi');
            $table->string('data_inizio');
            $table->string('valutazione');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangas');
    }
};
