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
        Schema::create('plan_accion_tutoria', function (Blueprint $table) {
            $table->integer('id_plan_accion')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_semestre')->unsigned();
            $table->string('no_matricula_grupo');
            $table->string('hombres', 50);
            $table->string('mujeres', 50);
            $table->string('ploblematica_identificada', 50);
            $table->string('objetivos', 50);
            $table->string('acciones_implementar', 50);
            $table->string('act_1', 50);
            $table->string('act_2', 50);
            $table->string('act_3', 50);
            $table->string('act_4', 50);
            $table->string('act_5', 50);
            $table->string('evaluacion_final', 50);
            
            // Timestamps
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_semestre')->references('id_semestre')->on('semestre')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_accion_tutoria');
    }
};
