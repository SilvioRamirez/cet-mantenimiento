<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;


    //Define las relaciones con el modelo dependencia
    public function dependencia()
    {
        //relacion uno a uno, un usuario solo puede tener un modelo dependencia asociado
        return $this->hasOne(Dependencia::class);
    }

    public function equipos()
    {
        //Relacion uno a muchos, un usuario puede tener varios equipos asociados
        return $this->hasMany(Equipos::class);
    }
}
