<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;

    public function empleados()
    {
        //Un equipo pertenece a un Empleado
        return $this->belongsTo(Empleados::class);
    }

    public function dependencia()
    {
        //Un Equipo pertene a un Dependencia
        return $this->belongsTo(Dependencia::class);
    }
}
