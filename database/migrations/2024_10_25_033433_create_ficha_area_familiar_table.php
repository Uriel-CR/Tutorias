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
        Schema::create('ficha_area_familiar', function (Blueprint $table) {
            $table->integer('id_area_familiar')->primary()->unsigned()->autoIncrement();
            $table->integer('id_ficha')->unsigned();
        
            $table->string('indicador_1', 100)->nullable();
            $table->string('indicador_2', 100)->nullable();
            $table->string('indicador_3', 100)->nullable();
            $table->string('indicador_4', 100)->nullable();
            $table->string('indicador_5', 100)->nullable();
            $table->string('indicador_6', 100)->nullable();
            $table->string('indicador_7', 100)->nullable();
            $table->string('indicador_8', 100)->nullable();
            $table->string('indicador_9', 100)->nullable();
            $table->string('indicador_10', 100)->nullable();
            $table->string('indicador_11', 100)->nullable();
        
            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('ficha_identificacion_tutorado')
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
        Schema::dropIfExists('ficha_area_familiar');
    }
};
