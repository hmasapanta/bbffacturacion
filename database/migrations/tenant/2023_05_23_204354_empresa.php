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
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('nombre_empresa');
            $table->string('nombre_corto');
            $table->string('tipo_firma');
            $table->date('vigencia_firma');
            $table->string('propietario_firma');
            $table->string('rimpe');
            $table->string('contribuyente_especial');
            $table->string('negocio_popular');
            $table->string('agente_retencion');
            $table->string('lleva_contabilidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
