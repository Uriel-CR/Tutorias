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
        Schema::create('mensual_asesoria', function (Blueprint $table) {
            $table->integer('id_asesoria_mensual')->primary()->unsigned()->autoIncrement();
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('id_alumno_tutoria')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->string('mes', 20);
            $table->string('no_asesorias_implicadas', 50)->nullable();
            $table->string('tipo_recurso_didactico', 50)->nullable();

            // Relaciones de clave foránea
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login');
            $table->foreign('id_alumno_tutoria')->references('id_alumno_tutoria')->on('alumnos_tutorias');
            $table->foreign('id_materia')->references('id_materia')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensual_asesoria');
    }
};
