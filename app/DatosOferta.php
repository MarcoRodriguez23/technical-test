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

  public static function validationRules()
  {
    return [
      'cliente_id' => 'required|unique:datos_clientes',
      'monto' => 'required|integer',
      'plazo' => 'required|string',
      'pago_mensual' => 'required',
      'tasa_interes' => 'required|string',
      'decision' => 'required|string',
      'decision_final' => 'required|string'
    ];
  }
}
