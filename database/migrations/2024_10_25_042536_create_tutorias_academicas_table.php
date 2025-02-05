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
        Schema::create('tutorias_academicas', function (Blueprint $table) {
            $table->integer('id_tutoria')->primary()->unsigned()->autoIncrement();
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->string('mes_reporte', 100); // not null
            $table->string('formacion_academica', 100)->nullable();
            $table->string('formacion_personal', 100)->nullable();
            $table->string('formacion_profesional', 100)->nullable();

            // Timestamps
            $table->timestamps();

            // Claves foráneas
            $table->foreign('id_semestre')->references('id_semestre')->on('semestre')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tutorias_academicas');
    }
};
