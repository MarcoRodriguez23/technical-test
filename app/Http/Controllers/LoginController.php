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
      $data_cliente = $resultado->datos_personales;

      if(! DatosCliente::where('rfc',$data_cliente->rfc)->first())
      {
        DatosCliente::create([
          'cliente_id' => $data_cliente->cliente_id,
          'nombre'=> $data_cliente->nombre,
          'apellido_paterno' => $data_cliente->apellido_paterno,
          'apellido_materno' => $data_cliente->apellido_materno,
          'rfc' => $data_cliente->rfc,
          'fecha_nacimiento' => $data_cliente->fecha_nacimiento,
          'ingresos' => $data_cliente->ingresos,
          'egresos' => $data_cliente->egresos,
          'no_dependientes' => $data_cliente->no_dependientes,
          'estado_civil' => $data_cliente->estado_civil,
          'genero' => $data_cliente->genero,
          'ultimo_grado_estudios' => $data_cliente->ultimo_grado_estudios
        ]);
      }

      session(['rfc'=> $data_cliente->rfc]);

      $cliente = DatosCliente::where('rfc',session('rfc'))->first();

      return redirect()->route('data.index',['cliente'=>$cliente]);
    }
  }
}
