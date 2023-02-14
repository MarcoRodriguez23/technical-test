<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosOferta extends Model
{
  protected $fillable = [
    'cliente_id',
    'monto',
    'plazo',
    'pago_mensual',
    'tasa_interes',
  ];
}
