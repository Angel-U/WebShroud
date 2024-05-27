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
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->unsignedBigInteger('idUsuario'); 
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Correo');
            $table->string('NumTel');
            $table->string('Especialidad');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('artistas');
    }
};
