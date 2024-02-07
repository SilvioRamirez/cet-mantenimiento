<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;
  
    protected $guarded = [

    ];

    public function getCreatedAtAttribute()

    {   

    return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-m-Y');

    }
}
