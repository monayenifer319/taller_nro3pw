<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";

    protected $fillable = ['id', 'nombre', 'apellido', 'password',
    'email', 'direccion', 'telefono'];
}
