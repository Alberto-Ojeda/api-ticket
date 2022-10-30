<?php

namespace App\Models\equipos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_equipo',
        'nombre',
        'status',
        'id_tipo_equipo',
        'id_tipo_area',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];
}
