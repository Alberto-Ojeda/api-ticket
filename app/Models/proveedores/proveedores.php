<?php

namespace App\Models\proveedores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_proveedor',
        'proveedor',
        'api_key',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];
}
