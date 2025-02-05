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
        Schema::create('solicitud_asesoria', function (Blueprint $table) {
            $table->integer('id_solicitud')->primary()->unsigned()->autoIncrement();
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->integer('id_alumno_tutoria')->unsigned();
            $table->date('fecha')->nullable(); // column for date
            $table->string('medio_didactico_recurso', 50)->nullable();
            $table->string('temas_tratar_descripcion', 50)->nullable();

            // Timestamps
            $table->timestamps();

            // Claves foráneas
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login');
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            $table->foreign('id_alumno_tutoria')->references('id_alumno_tutoria')->on('alumnos_tutorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_asesoria');
    }
};
