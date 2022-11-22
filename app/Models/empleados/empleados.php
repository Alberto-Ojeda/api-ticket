<?php

namespace App\Models\empleados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
class empleados extends Model
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    protected $fillable=[
        'id_empleado',
        'username',
        'nombre',
        'apellido',
        'password',
        'status',
        'id_equipo',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];
}
