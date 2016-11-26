<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = "productos";

    protected $fillable = ['id', 'nombre', 'descripcion', 'precio',
        'fecha_registro', 'cantidad', 'adjunto_producto'];
}
