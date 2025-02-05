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
        Schema::create('calificaciones_resumen', function (Blueprint $table) {
            $table->integer('id_resumen')->primary()->unsigned()->autoIncrement();
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->integer('total_alumnos')->default(0);
            $table->integer('parcial_1_reprobados')->default(0);
            $table->integer('parcial_1_aprobados')->default(0);
            $table->integer('parcial_2_reprobados')->default(0);
            $table->integer('parcial_2_aprobados')->default(0);
            $table->integer('parcial_3_reprobados')->default(0);
            $table->integer('parcial_3_aprobados')->default(0);
            $table->integer('promedio_reprobados')->default(0);
            $table->integer('promedio_aprobados')->default(0);
            $table->integer('segunda_oportunidad_reprobados')->default(0);
            $table->integer('segunda_oportunidad_aprobados')->default(0);
            $table->decimal('creditos_reprobados_parcial_1', 10, 2)->default(0.00);
            $table->decimal('creditos_aprobados_parcial_1', 10, 2)->default(0.00);
            $table->decimal('creditos_reprobados_parcial_2', 10, 2)->default(0.00);
            $table->decimal('creditos_aprobados_parcial_2', 10, 2)->default(0.00);
            $table->decimal('creditos_reprobados_parcial_3', 10, 2)->default(0.00);
            $table->decimal('creditos_aprobados_parcial_3', 10, 2)->default(0.00);
            $table->decimal('creditos_reprobados_promedio', 10, 2)->default(0.00);
            $table->decimal('creditos_aprobados_promedio', 10, 2)->default(0.00);
            $table->decimal('creditos_reprobados_segunda_oportunidad', 10, 2)->default(0.00);
            $table->decimal('creditos_aprobados_segunda_oportunidad', 10, 2)->default(0.00);
            $table->integer('calif_final_aprobados')->nullable();
            $table->integer('calif_final_reprobados')->nullable();
            $table->decimal('creditos_reprobados_calif_final', 10, 2);
            $table->decimal('creditos_aprobados_calif_final', 10, 2);
        
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos');
            $table->foreign('id_semestre')->references('id_semestre')->on('semestre');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones_resumen');
    }
};
