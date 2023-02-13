<?php

namespace App\Http\Controllers;

use App\API;
use App\DatosCliente;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function store(Request $request)
  {
    $api = new API();
    $resultado =  $api->getDatos($request->rfc);

    if(is_string($resultado))
    {
      return back()->with('mensaje',$resultado);
    }
    else{
      // $this->validate($resultado->datos_personales,[
      //   'cliente_id' => 'required|integer',
      //   'nombre'=> 'required|string',
      //   'apellido_paterno' => 'requred|string',
      //   'apellido_materno' => 'requred|string',
      //   'rfc' => 'required|max:10',
      //   'fecha_nacimiento' => 'required|date',
      //   'ingresos' => 'required|integer',
      //   'egresos' => 'required|integer',
      //   'no_dependientes' => 'required|integer',
      //   'estado_civil' => 'required|string',
      //   'genero' => 'required|string',
      //   'ultimo_grado_estudios' => 'required|integer'
      // ]); 

      DatosCliente::create([
        'cliente_id' => $resultado->datos_personales->cliente_id,
        'nombre'=> $resultado->datos_personales->nombre,
        'apellido_paterno' => $resultado->datos_personales->apellido_paterno,
        'apellido_materno' => $resultado->datos_personales->apellido_materno,
        'rfc' => $resultado->datos_personales->rfc,
        'fecha_nacimiento' => $resultado->datos_personales->fecha_nacimiento,
        'ingresos' => $resultado->datos_personales->ingresos,
        'egresos' => $resultado->datos_personales->egresos,
        'no_dependientes' => $resultado->datos_personales->no_dependientes,
        'estado_civil' => $resultado->datos_personales->estado_civil,
        'genero' => $resultado->datos_personales->genero,
        'ultimo_grado_estudios' => $resultado->datos_personales->ultimo_grado_estudios
      ]);

      return redirect()->route('data.index',['data' => $resultado]);
    }
  }
}
