<?php

namespace App\Models\areaTickets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areaTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_area',
        'nombre',
        'descripcion',
        'created_at',
        'updated_at',

    ];
}
