<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformesTecnicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'informe_codigo',
        'informe_fecha',
        'informe_funcionario',
        'informe_cargofuncionario',
        'informe_dependencia',
        'informe_responsable',
        'informe_cargo',
        'informe_bienes',
        'informe_equipo',
        'informe_marca',
        'informe_color',
        'informe_serial',
        'informe_caracteristicas',
        'informe_falla',
        'informe_diagnostico',
        'informe_trabajo_realizado',
        'informe_observaciones',
        'informe_recomendaciones',
    ];

}
