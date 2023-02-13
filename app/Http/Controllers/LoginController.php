<?php

namespace App\Http\Controllers;

use App\API;
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
      return redirect()->route('data.index',['data' => $resultado]);
    }

  }
}
