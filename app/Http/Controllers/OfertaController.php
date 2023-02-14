<?php

namespace App\Http\Controllers;

use App\API;
use App\DatosCliente;
use App\DatosOferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
  public function index()
  {
    
    if(session('cliente_id'))
    {
      return view('oferta');
    }
    else
    {
      return redirect()->route('login.index');
    }

  }

  public function store()
  {
    $cliente = DatosCliente::where('cliente_id',session('cliente_id'))->first();

    $api = new API();
    $resultado =  $api->getDatos($cliente->rfc);
    $data_prestamo = $resultado->datos_credito;

    if(! DatosOferta::where('cliente_id',session('cliente_id'))->first()){
      DatosOferta::create([
        'cliente_id' => session('cliente_id'),
        'monto'=> $data_prestamo->monto,
        'plazo'=> $data_prestamo->plazo,
        'pago_mensual'=> $data_prestamo->pago_mensual,
        'tasa_interes' => $data_prestamo->tasa_interes,
      ]);
    }

    $cliente->status = 'registrado';
    $cliente->save();
    
    return redirect()->route('oferta.index');
  }
}
