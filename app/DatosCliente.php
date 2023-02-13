<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosCliente extends Model
{
  protected $fillable = [
    'cliente_id',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'rfc',
    'fecha_nacimiento',
    'ingresos',
    'egresos',
    'no_dependientes',
    'estado_civil',
    'genero',
    'ultimo_grado_estudios'
  ];
}
