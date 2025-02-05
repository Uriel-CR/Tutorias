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
        Schema::create('ficha_identificacion_tutorado', function (Blueprint $table) {
            $table->integer('id_ficha')->primary()->unsigned()->autoIncrement();
            $table->integer('id_alumno_tutoria')->unsigned();
            $table->date('fecha')->nullable();
        
            $table->foreign('id_alumno_tutoria')
                ->references('id_alumno_tutoria')
                ->on('alumnos_tutorias')
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
        Schema::dropIfExists('ficha_identificacion_tutorado');
    }
};
