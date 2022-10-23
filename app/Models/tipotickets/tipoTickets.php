<?php

namespace App\Models\tipotickets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipo_tickets',
        'tipo_ticket',
        'status',
        'created_at',
        'updated_at'
    ];

}
