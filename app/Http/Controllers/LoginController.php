<?php

namespace App\Http\Controllers;

use App\API;
use App\DatosCliente;
use App\DatosDomicilio;
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
      $data_domicilio = $resultado->datos_domicilio;

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

        DatosDomicilio::create([
          'cliente_id' => $data_cliente->cliente_id,
          'calle' => $data_domicilio->calle,
          'no_exterior' => $data_domicilio->no_exterior,
          'no_interior' => $data_domicilio->no_interior,
          'colonia' => $data_domicilio->colonia,
          'municipio' => $data_domicilio->municipio,
          'estado' => $data_domicilio->estado,
          'cp' => $data_domicilio->cp
        ]);
      }

      session(['cliente_id'=> $data_cliente->cliente_id]);

      $cliente = DatosCliente::where('cliente_id',session('cliente_id'))->first();
      $domicilio = DatosDomicilio::where('cliente_id',session('cliente_id'))->first();

      return redirect()->route('data.index',['cliente'=>$cliente, 'domicilio'=>$domicilio]);
    }
  }
}
