<?php

namespace App\Http\Controllers;

use App\API;
use App\DatosOferta;
use App\DatosCliente;
use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfertaController extends Controller
{
  public function index()
  {
    
    if(session('cliente_id'))
    {
      $oferta = DatosOferta::where('cliente_id',session('cliente_id'))->first();
      return view('oferta',['oferta'=>$oferta]);
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
      
      $cliente->status = 'registrado';
      $cliente->save();
    }

    $oferta = DatosOferta::where('cliente_id',session('cliente_id'))->first();
    
    return redirect()->route('oferta.index',['oferta'=>$oferta]);
  }

  public function update(Request $request)
  {
    $cliente = DatosCliente::where('cliente_id',session('cliente_id'))->first();

    $cliente->status = $request->decision;
    $cliente->oferta->decision = $request->decision;

    $cliente->save();
    $cliente->oferta->save();

    if ($cliente->oferta->decision=='aceptada') {
      $correo = new AdminMail($cliente);
      Mail::to(env('EMAIL_DESTINO'))->send($correo);
    }

    return redirect()->back();

  }
}
