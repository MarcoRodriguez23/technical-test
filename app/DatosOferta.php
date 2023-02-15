<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosOferta extends Model
{
  protected $primaryKey = 'cliente_id';
  
  protected $fillable = [
    'cliente_id',
    'monto',
    'plazo',
    'pago_mensual',
    'tasa_interes',
    'decision',
    'decision_final'
  ];
}
