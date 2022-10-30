<?php

namespace App\Models\ticketStatus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estadoTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ticket_status',
        'name',
        'description',
        'status',
        'created_at',
        'updated_at',

    ];
}
