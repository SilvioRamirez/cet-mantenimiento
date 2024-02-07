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
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->date('software_fecha');
            $table->string('software_funcionario');
            $table->string('software_cargo');
            $table->string('software_bienes');
            $table->string('software_dependencia');
            $table->string('software_encargado');
            $table->string('software_cargoencargado');
            $table->string('software_equipo');
            $table->string('software_marca');
            $table->string('software_serial');
            $table->string('software_color');
            $table->string('software_antivirus');
            $table->string('software_respaldo');
            $table->string('software_recuperacion');
            $table->string('software_programas');
            $table->string('software_discoduro');
            $table->string('software_analisisvirus');
            $table->string('software_formateo');
            $table->string('software_red');
            $table->string('software_desfragmentacion');
            $table->string('software_observacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software');
    }
};
