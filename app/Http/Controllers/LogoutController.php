<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
  public function store()
  {
    session()->forget('cliente_id');
    return redirect()->route('login.index');
  }
}
