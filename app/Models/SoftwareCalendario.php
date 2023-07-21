<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareCalendario extends Model
{
    use HasFactory;

    static $rule= [
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];
    protected $fillable= [
        'title',
        'descripcion',
        'start',
        'end'
    ];
}
