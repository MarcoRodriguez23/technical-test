<?php

namespace App\Http\Controllers;

use App\DatosCliente;
use App\DatosDomicilio;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function index()
  {
    
    if(session('cliente_id'))
    {
      $cliente = DatosCliente::where('cliente_id',session('cliente_id'))->first();
      $domicilio = DatosDomicilio::where('cliente_id',session('cliente_id'))->first();
      
      return view('datos',['cliente'=> $cliente, 'domicilio'=>$domicilio]);
    }
    else
    {
      return redirect()->route('login.index');
    }

  }

  public function store(Request $request)
  {
    dd($request->cp);
  }
}
