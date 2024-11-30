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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');  // El título de la actividad
            $table->text('descripcion')->nullable();  // Descripción de la actividad
            $table->dateTime('fecha');  // Fecha y hora de la actividad
            $table->boolean('vigente')->default(1);  // Fecha y hora de la actividad
            $table->unsignedBigInteger('user_id');  // Relación con el usuario que creó la actividad
            $table->foreign('user_id')->references('id')->on('users'); // Relación con la tabla de usuarios
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
