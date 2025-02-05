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
        Schema::create('problematica_identificada', function (Blueprint $table) {
            $table->integer('id_problematica')->primary()->unsigned()->autoIncrement();
            $table->string('tipo_problematica',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problematica_identificada');
    }
};
