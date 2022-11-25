<?php

namespace App\Models\proveedores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class proveedores extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
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
