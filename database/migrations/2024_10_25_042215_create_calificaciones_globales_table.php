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
        Schema::create('calificaciones_globales', function (Blueprint $table) {
            $table->integer('id_calificacion_global')->primary()->unsigned()->autoIncrement();
            $table->integer('id_encuesta_organizacion')->unsigned();
            $table->integer('id_encuesta_tecnica')->unsigned();
            $table->integer('id_encuesta_motivacion')->unsigned();
            $table->string('calif_global_organizacion', 20)->nullable(); // global organization grade
            $table->string('calif_global_tecnicas', 20)->nullable(); // global techniques grade
            $table->string('calif_global_motivacion', 20)->nullable(); // global motivation grade
            $table->string('calificacion_todas_habilidades', 20)->nullable(); // all skills grade
            $table->string('interpretacion', 25)->nullable(); // interpretation

            // Timestamps
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_encuesta_organizacion')->references('id_encuesta_organizacion')->on('encuesta_organizacion_estudio')->onDelete('cascade');
            $table->foreign('id_encuesta_tecnica')->references('id_encuesta_tecnica')->on('encuesta_tecnicas_estudio')->onDelete('cascade');
            $table->foreign('id_encuesta_motivacion')->references('id_encuesta_motivacion')->on('encuesta_motivacion_estudio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones_globales');
    }
};
