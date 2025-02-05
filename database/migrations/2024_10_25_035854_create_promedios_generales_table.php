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
        Schema::create('promedios_generales', function (Blueprint $table) {
            $table->integer('id_promedio')->primary()->unsigned()->autoIncrement();
            $table->integer('id_alumno_tutoria')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->string('Promedio_parcial1', 10)->nullable();
            $table->string('Promedio_parcial2', 10)->nullable();
            $table->string('Promedio_parcial3', 10)->nullable();
        
            $table->foreign('id_alumno_tutoria')->references('id_alumno_tutoria')->on('alumnos_tutorias');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos');
            $table->foreign('id_semestre')->references('id_semestre')->on('semestre');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promedios_generales');
    }
};
