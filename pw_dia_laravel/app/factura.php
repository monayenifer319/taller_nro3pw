<?php

namespace TiendaEnLinea;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = "facturas";

    protected $fillable = ['id', 'fecha_factura', 'nombre_producto', 'compra_id',
         'usuarios_id'];
}
