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
        Schema::create('area_psicopedagogica', function (Blueprint $table) {
            $table->integer('id_area_psicopedagogica')->primary()->unsigned()->autoIncrement();
            $table->integer('id_ficha')->unsigned();

            // Psicopedagogical indicators
            $table->string('indicador_psicopedagogico_1', 255)->nullable();
            $table->string('indicador_psicopedagogico_2', 255)->nullable();
            $table->string('indicador_psicopedagogico_3', 255)->nullable();
            $table->string('indicador_psicopedagogico_4', 255)->nullable();
            $table->string('indicador_psicopedagogico_5', 255)->nullable();
            $table->string('indicador_psicopedagogico_6', 255)->nullable();
            $table->string('indicador_psicopedagogico_7', 255)->nullable();
            $table->string('indicador_psicopedagogico_8', 255)->nullable();
            $table->string('indicador_psicopedagogico_9', 255)->nullable();

            // Life and career plans
            $table->string('plan_vida_carrera_1', 100)->nullable();
            $table->string('plan_vida_carrera_2', 100)->nullable();

            // Personal characteristics
            $table->string('caracteristicas_personales_1', 100)->nullable();
            $table->string('caracteristicas_personales_2', 100)->nullable();
            $table->string('caracteristicas_personales_3', 100)->nullable();
            $table->string('caracteristicas_personales_4', 100)->nullable();
            $table->string('caracteristicas_personales_5', 100)->nullable();

            // Timestamps
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_ficha')->references('id_ficha')->on('ficha_identificacion_tutorado')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_psicopedagogica');
    }
};
