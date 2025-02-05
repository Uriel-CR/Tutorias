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
        Schema::create('grupos', function (Blueprint $table) {
            $table->integer('id_grupo')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_profesor_login')->unsigned();
            $table->integer('nombre_grupo')->nullable();
            $table->integer('id_materia1')->unsigned()->nullable();
            $table->integer('id_materia2')->unsigned()->nullable();
            $table->integer('id_materia3')->unsigned()->nullable();
            $table->integer('id_materia4')->unsigned()->nullable();
            $table->integer('id_materia5')->unsigned()->nullable();
            $table->integer('id_materia6')->unsigned()->nullable();
            
            // Timestamps
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_profesor_login')->references('id_profesor_login')->on('profesores_login')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_materia1')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia2')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia3')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia4')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia5')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia6')->references('id_materia')->on('materias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
