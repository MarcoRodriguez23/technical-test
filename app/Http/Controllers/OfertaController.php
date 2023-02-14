<?php

namespace App\Http\Controllers;

use App\DatosCliente;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
  public function index()
  {
    
    if(session('rfc'))
    {
      return view('oferta');
    }
    else
    {
      return redirect()->route('login.index');
    }

  }
}
