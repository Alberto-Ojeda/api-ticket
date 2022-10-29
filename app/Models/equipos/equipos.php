<?php

namespace App\Models\equipos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ticket' ,
        'nombre' ,
        'descripcion' ,
        'fecha_inicio' ,
        'fecha_cumplimiento' ,
        'fecha_expiracion' ,
        'id_equipo' ,
        'id_empleado' ,
        'id_tipo_tickets' ,
        'id_area' ,
        'id_servicio_ticket' ,
        'id_ticket_status' ,
        'id_prioridad' ,
        'created_by' ,
        'updated_by' ,
    ];
}
