<?php

namespace App\Models\tokenProveedores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokenProveedores extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_token_proveedores',
        'id_proveedor',
        'token',
        'status',
        'last_used_at'
    ];
}
