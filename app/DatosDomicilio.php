<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosDomicilio extends Model
{
  protected $primaryKey = 'cliente_id';
  
  protected $fillable = [
    'cliente_id',
    'calle',
    'no_exterior',
    'no_interior',
    'colonia',
    'municipio',
    'estado',
    'cp'
  ];

  public static function validationRules()
  {
    return [
      'cliente_id' => 'required|unique:datos_clientes',
      'calle' => 'required|max:30',
      'no_exterior' => 'required|max:3|integer',
      'no_interior' => 'required|max:3|integer',
      'colonia' => 'required|max:35',
      'municipio' => 'required|max:25',
      'estado' => 'required|max:30',
      'cp' => 'required|max:5|'
    ];
  }
}
