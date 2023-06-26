<?php
use App\Models\Empleados;
use App\Models\Equipos;
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
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Empleados::class);
            $table->foreignIdFor(Equipos::class);
            $table->string('depen_nombre');
            $table->string('depen_num_interno');
            $table->string('depen_nivel');
            $table->string('depen_piso');
            $table->string('depen_abreviacion');
            $table->string('depen_empleado');
            $table->string('depen_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencias');
    }
};
