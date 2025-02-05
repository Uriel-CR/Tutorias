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
        Schema::create('carreras', function (Blueprint $table) {
            $table->integer('id_carrera')->primary()->unsigned()->autoIncrement();
            $table-> integer("id_jefe_carrera")->unsigned();
            $table->string('carrera', 50);
            
            // Timestamps
            $table->timestamps();

            $table->foreign('id_jefe_carrera')->references('id_jefe_carrera')->on('jefes_carrera')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
