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
        Schema::create('alumnos_tutorias', function (Blueprint $table) {
            $table->integer('id_alumno_tutoria')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_carrera')->unsigned();
            $table->string('matricula', 50);
            $table->string('usuario', 50);
            $table->string('nombre', 50);
            $table->string('ap_paterno', 50);
            $table->string('ap_materno', 50);
            $table->string('correo', 50);
            $table->string('telefono', 20);
            $table->text('contraseña');
            $table->string('estatus_canalizacion', 20);
            
            // Timestamps
            $table->timestamps();
            
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_semestre')->references('id_semestre')->on('semestre')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos_tutorias');
    }
};
