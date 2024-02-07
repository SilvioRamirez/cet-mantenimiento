<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable = [
        'software_fecha',
        'software_funcionario',
        'software_cargo',
        'software_bienes',
        'software_dependencia',
        'software_encargado',
        'software_cargoencargado',
        'software_equipo',
        'software_marca',
        'software_serial',
        'software_color',
        'software_antivirus',
        'software_respaldo',
        'software_recuperacion',
        'software_programas',
        'software_discoduro',
        'software_analisisvirus',
        'software_formateo',
        'software_red',
        'software_desfragmentacion',
        'software_observacion'
    ];
    public function getCreatedAtAttribute()

    {   

    return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-m-Y');

    }
}
