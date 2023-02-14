<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosDomicilio extends Model
{
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
}
