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
        Schema::create('informes_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('informe_codigo');
            $table->date('informe_fecha');
            $table->string('informe_funcionario');
            $table->string('informe_cargofuncionario');
            $table->string('informe_dependencia');
            $table->string('informe_responsable');
            $table->string('informe_cargo');
            $table->string('informe_bienes');
            $table->string('informe_equipo');
            $table->string('informe_marca');
            $table->string('informe_color');
            $table->string('informe_serial');
            $table->string('informe_caracteristicas');
            $table->string('informe_falla');
            $table->string('informe_diagnostico');
            $table->string('informe_trabajo_realizado');
            $table->string('informe_observaciones');
            $table->string('informe_recomendaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes_tecnicos');
    }
};
