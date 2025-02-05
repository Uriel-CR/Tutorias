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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->integer('id_calificacion')->primary()->unsigned()->autoIncrement();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('id_alumno_tutoria')->unsigned();
        
            $table->string('parcial_1', 10)->nullable();
            $table->string('parcial_2', 10)->nullable();
            $table->string('parcial_3', 10)->nullable();
            $table->string('promedio', 10)->nullable();
            $table->string('segunda_oportunidad', 10)->nullable();
            $table->string('calif_final', 10)->nullable();
            $table->string('comentario', 100);
        
            $table->foreign('id_periodo')
                ->references('id_periodo')
                ->on('periodos')
                ->onUpdate('cascade');
        
            $table->foreign('id_grupo')
                ->references('id_grupo')
                ->on('grupos')
                ->onUpdate('cascade');
        
            $table->foreign('id_materia')
                ->references('id_materia')
                ->on('materias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        
            $table->foreign('id_profesor_login')
                ->references('id_profesor_login')
                ->on('profesores_login')
                ->onUpdate('cascade');
        
            $table->foreign('id_alumno_tutoria')
                ->references('id_alumno_tutoria')
                ->on('alumnos_tutorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_semestre')
                ->references('id_semestre')
                ->on('semestre')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
