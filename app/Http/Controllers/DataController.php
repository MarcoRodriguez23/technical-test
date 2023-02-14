<?php

namespace App\Http\Controllers;

use App\DatosCliente;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function index()
  {
    
    if(session('rfc'))
    {
      $cliente = DatosCliente::where('rfc',session('rfc'))->first();
      return view('datos',['cliente'=> $cliente]);
    }
    else
    {
      return redirect()->route('login.index');
    }

  }
}
