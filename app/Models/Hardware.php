<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = [
        'hardware_fecha',
        'hardware_funcionario',
        'hardware_cargo',
        'hardware_bienes',
        'hardware_dependencia',
        'hardware_encargado',
        'hardware_equipo',
        'hardware_marca',
        'hardware_serial',
        'hardware_color',
        'hardware_limpiezacase',
        'hardware_limpiezacasexterna',
        'hardware_limpiezamonitor',
        'hardware_limpiezateclado',
        'hardware_limpiezamouse',
        'hardware_limpiezaimpresora',
        'hardware_limpiezaprocesador',
        'hardware_limpiezafuente',
        'hardware_limpiezaelectronico',
        'hardware_limpiezaram',
        'hardware_limpiezacd',
        'hardware_procesador',
        'hardware_tarjetamadre',
        'hardware_memoria',
        'hardware_hdd',
        'hardware_cd',
        'hardware_dvd',
        'hardware_fuente_poder',
        'hardware_faja_cable',
        'hardware_pila',
        'hardware_observacion'
    ];
}
