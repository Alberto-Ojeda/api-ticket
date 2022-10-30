<?php

namespace App\Models\clientes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_cliente_heroku',
        'id_cliente',
        'id_cliente_conekta',
        'nombres_cliente',
        'apellidos_cliente',
        'email_cliente',
        'telefono_cliente',
        'dominio_cliente',
        'negocio_cliente',
        'id_pais',
        'id_estado',
        'provincia_cliente',
        'cp_cliente',
        'status',
        'date_created',
        'id_user_created',
        'trial_free',
        'deleted_date',
        'status_suscripcion',
        'fecha_facturacion',
        'notif_visto',
        'id_frm_pago',
        'no_viable',
        'compro_otro_medio',
        'created_at',
        'updated_at',

    ];
}
