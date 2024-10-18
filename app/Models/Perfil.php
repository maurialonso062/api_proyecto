<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'perf_descripcion', 
        'perf_abreviatura'
    ];
    protected $table ='perfiles';
}
