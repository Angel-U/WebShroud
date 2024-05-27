<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeria_artistas', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->text('Descripcion');
            $table->unsignedBigInteger('idCategoria');
            $table->string('imagen')->nullable();
            $table->unsignedBigInteger('idArtista');
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->foreign('idArtista')->references('id')->on('artistas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeria_artistas');
    }
};