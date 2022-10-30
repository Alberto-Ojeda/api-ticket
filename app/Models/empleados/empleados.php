<?php

namespace App\Models\empleados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_empleado',
        'nombre',
        'apellido',
        'status',
        'id_equipo',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];
}
