<?php

namespace App\Models\seguimientoTickets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimientoTickets extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_seguimiento_ticket',
        'id_ticket',
        'id_equipo',
        'id_empleado',
        'comentario',
        'status',
        'created_at',
        'updated_at'

    ] ;
}
