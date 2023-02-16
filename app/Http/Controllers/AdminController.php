<?php

namespace App\Http\Controllers;

use App\DatosCliente;
use Illuminate\Http\Request;

class AdminController extends Controller
{

  public function aceptar(DatosCliente $cliente)
  {
    if($cliente->oferta->decision_final =='sin cambios')
    {
      $cliente->oferta->decision_final = 'aceptada';
      $cliente->oferta->save();
    }

    return redirect()->route('admin.show',['cliente'=>$cliente]);
  }

  public function rechazar(DatosCliente $cliente)
  {
    if($cliente->oferta->decision_final =='sin cambios')
    {
      $cliente->oferta->decision_final = 'rechazada';
      $cliente->oferta->save();
    }

    return redirect()->route('admin.show',['cliente'=>$cliente]);
  }

  public function show(DatosCliente $cliente)
  {
    return view('decision',['cliente'=>$cliente]);
  }
}
