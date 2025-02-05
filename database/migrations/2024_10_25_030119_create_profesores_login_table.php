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
        Schema::create('profesores_login', function (Blueprint $table) {
            $table->integer('id_profesor_login')->primary()->unsigned()->autoIncrement(); // auto increment primary key
            $table->integer('id_carrera')->unsigned();
            $table->string('clave', 30);
            $table->string('nombre', 50);
            $table->string('ap_paterno', 50);
            $table->string('ap_materno', 50);
            $table->string('correo', 50);
            $table->text('contraseña');
            
            // Timestamps
            $table->timestamps();

            $table->foreign('id_carrera')->references('Id_carrera')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores_login');
    }
};
