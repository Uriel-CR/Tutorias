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
        Schema::create('mens_tutoria', function (Blueprint $table) {
            $table->integer('id_mens_tutoria')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_profesor_login')->unsigned(); // foreign key to profesores_login
            $table->integer('id_alumno_tutoria')->unsigned(); // foreign key to alumnos_tutorias
            $table->integer('id_problematica')->unsigned(); // foreign key to problematica_identificada
            $table->string('mes_entrega', 20)->nullable();
            
            $table->string('analisis_metodo_aplicado', 200)->nullable();
            $table->string('area_canalizar', 50)->nullable();

            // Timestamps
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_alumno_tutoria')->references('id_alumno_tutoria')->on('alumnos_tutorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_problematica')->references('id_problematica')->on('problematica_identificada')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mens_tutoria');
    }
};
