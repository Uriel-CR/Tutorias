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
        Schema::create('turnos', function (Blueprint $table) {
            $table->integer('id_turno')->primary()->unsigned()->autoIncrement();
            $table->integer('id_grupos')->nullable()->unsigned();
            $table->integer('id_materias')->nullable()->unsigned();
            $table->integer('id_profesor_login')->nullable()->unsigned();
            $table->integer('id_periodos')->nullable()->unsigned();
            $table->integer('id_salones')->nullable()->unsigned();
            $table->string('lunes', 20)->nullable();
            $table->string('martes', 20)->nullable();
            $table->string('miercoles', 20)->nullable();
            $table->string('jueves', 20)->nullable();
            $table->string('viernes', 20)->nullable();
            $table->string('horas', 10)->nullable();

            // Timestamps
            $table->timestamps();

            // Claves foráneas
            $table->foreign('id_grupos')->references('id_grupo')->on('grupos');
            $table->foreign('id_materias')->references('id_materia')->on('materias');
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login');
            $table->foreign('id_periodos')->references('id_periodo')->on('periodos');
            $table->foreign('id_salones')->references('id_salon')->on('salones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
