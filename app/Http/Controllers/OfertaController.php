<?php

namespace App\Http\Controllers;

use App\DatosCliente;
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
}
