<?php

namespace App\Models\ticketService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicioTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_servicio_ticket',
        'nombre',
        'descripcion',
        'status',
        'created_at',
        'updated_at',

    ];
}
