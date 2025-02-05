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
        Schema::create('materias', function (Blueprint $table) {
            $table->integer('id_materia')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_profesor_login')->unsigned();
            $table->string('clave_materia', 50)->nullable();
            $table->string('nombre', 50)->nullable();
            $table->integer('HRS_TEORICAS')->nullable();
            $table->integer('HRS_PRACTICAS')->nullable();
            $table->integer('creditos')->nullable();
            
            // Timestamps
            $table->timestamps();

            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
