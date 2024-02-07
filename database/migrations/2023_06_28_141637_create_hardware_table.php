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
        Schema::create('hardware', function (Blueprint $table) {
            $table->id();
            $table->date('hardware_fecha');
            $table->string('hardware_funcionario');
            $table->string('hardware_cargo');
            $table->string('hardware_bienes');
            $table->string('hardware_dependencia');
            $table->string('hardware_encargado');
            $table->string('hardware_cargoencargado');
            $table->string('hardware_equipo');
            $table->string('hardware_marca');
            $table->string('hardware_serial');
            $table->string('hardware_color');
            $table->string('hardware_limpiezacase');
            $table->string('hardware_limpiezacasexterna');
            $table->string('hardware_limpiezamonitor');
            $table->string('hardware_limpiezateclado');
            $table->string('hardware_limpiezamouse');
            $table->string('hardware_limpiezaimpresora');
            $table->string('hardware_limpiezaprocesador');
            $table->string('hardware_limpiezafuente');
            $table->string('hardware_limpiezaelectronico');
            $table->string('hardware_limpiezaram');
            $table->string('hardware_limpiezacd');
            $table->string('hardware_procesador');
            $table->string('hardware_tarjetamadre');
            $table->string('hardware_memoria');
            $table->string('hardware_hdd');
            $table->string('hardware_cd');
            $table->string('hardware_dvd');
            $table->string('hardware_fuente_poder');
            $table->string('hardware_faja_cable');
            $table->string('hardware_pila');
            $table->string('hardware_observacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware');
    }
};
