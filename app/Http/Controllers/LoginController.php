<?php

namespace App\Http\Controllers;

use App\API;
use App\DatosCliente;
use App\User;
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
      $personal_data = $resultado->datos_personales;

      if(! User::where('rfc',$personal_data->rfc)->first()){
        User::create([
          'cliente_id' => $personal_data->cliente_id,
          'nombre'=> $personal_data->nombre,
          'apellido_paterno' => $personal_data->apellido_paterno,
          'apellido_materno' => $personal_data->apellido_materno,
          'rfc' => $personal_data->rfc,
          'fecha_nacimiento' => $personal_data->fecha_nacimiento,
          'ingresos' => $personal_data->ingresos,
          'egresos' => $personal_data->egresos,
          'no_dependientes' => $personal_data->no_dependientes,
          'estado_civil' => $personal_data->estado_civil,
          'genero' => $personal_data->genero,
          'ultimo_grado_estudios' => $personal_data->ultimo_grado_estudios
        ]);
      }

      $cliente = DatosCliente::where('rfc',$personal_data->rfc)->first();

      return redirect()->route('data.index');
    }
  }
}
