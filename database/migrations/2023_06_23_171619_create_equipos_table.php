<?php
use App\Models\Empleados;
use App\Models\Dependencia;
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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Empleados::class)->nullable();
            $table->foreignIdFor(Dependencia::class)->nullable();
            $table->string('equipo_componente');
            $table->string('equipo_descripcion');
            $table->string('equipo_marca');
            $table->string('equipo_color');
            $table->string('equipo_serial');
            $table->string('equipo_cod_bien');
            $table->string('equipo_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
