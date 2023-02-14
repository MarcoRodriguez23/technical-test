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

  public function domicilio()
  {
    return $this->hasOne(DatosDomicilio::class,'cliente_id','cliente_id');
  }

  public function oferta()
  {
    return $this->hasOne(DatosOferta::class,'cliente_id','cliente_id');
  }
}
