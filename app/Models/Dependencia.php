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
        'depen_nombre', 'depen_num_interno', 'depen_nivel', 'depen_piso', 'depen_abreviacion', 'depen_empleado', 'depen_status'
    ];
}
