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
        Schema::create('cabecerafactura', function (Blueprint $table) {
            $table->id();
            $table->string('establecimiento');
            $table->date('fecha_emision');
            $table->string('guia_remision');
            $table->string('negociable');
            $table->string('documento');
            $table->string('tipo_documento');
            $table->string('razon_social');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecerafactura');
    }
};
