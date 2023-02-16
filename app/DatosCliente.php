<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosCliente extends Model
{
  protected $primaryKey = 'cliente_id';
  
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

  public static function validationRules()
  {
    return [
      'cliente_id' => 'required|unique:datos_clientes',
      'nombre' => 'required|string|max:30',
      'apellido_paterno' => 'required|string|max:30',
      'apellido_materno' => 'required|string|max:30',
      'rfc' => 'required|max:10|unique:datos_clientes',
      'fecha_nacimiento' => 'required|date',
      'ingresos' => 'required|integer',
      'egresos' => 'required|integer',
      'no_dependientes' => 'required|integer|max:2',
      'estado_civil' => 'required|string|max:15',
      'genero' => 'required|string|max:10',
      'ultimo_grado_estudios' => 'required|string'
    ];
  }

  public function domicilio()
  {
    return $this->hasOne(DatosDomicilio::class,'cliente_id','cliente_id');
  }

  public function oferta()
  {
    return $this->hasOne(DatosOferta::class,'cliente_id','cliente_id');
  }
}
