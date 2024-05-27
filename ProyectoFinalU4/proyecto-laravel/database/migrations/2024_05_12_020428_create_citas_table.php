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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCliente');
            $table->dateTime('FechaHraCita');
            $table->string('Motivo');
            $table->string('Duracion');
            $table->string('Estado');
            $table->string('Notas');
            $table->unsignedBigInteger('idArtista');
            $table->foreign('idCliente')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idArtista')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
