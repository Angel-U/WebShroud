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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->unsignedBigInteger('idUsuario'); 
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Correo');
            $table->string('NumeroTel');
            $table->date('FechaNacim');
            $table->string('ContectoEmer');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
