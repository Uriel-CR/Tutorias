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
        Schema::create('canalizacion', function (Blueprint $table) {
            $table->integer('id_canalizacion')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_alumno_tutoria')->unsigned();
            $table->date('fecha')->nullable(); // date field
            $table->string('factores_motivacion', 80)->nullable(); // motivation factors
            $table->string('relacion_documentos_solicitud', 80)->nullable(); // document request relation
            $table->string('observaciones_problematica', 80)->nullable(); // problem observations

            // Timestamps
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_alumno_tutoria')->references('id_alumno_tutoria')->on('alumnos_tutorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canalizacion');
    }
};
