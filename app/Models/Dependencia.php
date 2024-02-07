<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'depen_nombre', 'depen_num_interno', 'depen_abreviacion'
    ];

    //Define las relaciones a la inversa ->las que tiene dependencia con usuario
    
    public function empleados()
    {
        //Una dependencia pertene a un empleado
        return $this->belongsTo(Empleados::class);
    }

    public function equipos()
    {
        //Una dependencia puede tener multiples equipos asociados
        return $this->hasMany(Equipos::class);
    }
}
