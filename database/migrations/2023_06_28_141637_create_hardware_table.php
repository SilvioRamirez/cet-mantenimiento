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
            $table->string('hardware_equipo');
            $table->string('hardware_marca');
            $table->string('hardware_serial');
            $table->string('hardware_color');
            $table->string('hardware_limpiezacase')->nullable();
            $table->string('hardware_limpiezacasexterna')->nullable();
            $table->string('hardware_limpiezamonitor')->nullable();
            $table->string('hardware_limpiezateclado')->nullable();
            $table->string('hardware_limpiezamouse')->nullable();
            $table->string('hardware_limpiezaimpresora')->nullable();
            $table->string('hardware_limpiezaprocesador')->nullable();
            $table->string('hardware_limpiezafuente')->nullable();
            $table->string('hardware_limpiezaelectronico')->nullable();
            $table->string('hardware_limpiezaram')->nullable();
            $table->string('hardware_limpiezacd')->nullable();
            $table->string('hardware_procesador')->nullable();
            $table->string('hardware_tarjetamadre')->nullable();
            $table->string('hardware_memoria')->nullable();
            $table->string('hardware_hdd')->nullable();
            $table->string('hardware_cd')->nullable();
            $table->string('hardware_dvd')->nullable();
            $table->string('hardware_fuente_poder')->nullable();
            $table->string('hardware_faja_cable')->nullable();
            $table->string('hardware_pila')->nullable();
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
