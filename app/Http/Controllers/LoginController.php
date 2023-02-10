<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function store(Request $request)
  {
    $client = new Client([
      'verify' => false,
    ]);
    $response = $client->post('https://sitiowebdesarrollo.centralus.cloudapp.azure.com/api/login',[
      'json' => [
        'email' => 'rodriguezlmarco23@gmail.com',
        'password' => 'Marco.2023$'
      ]
    ]);

    $token = json_decode($response->getBody()->getContents())->token;

    dd($token);

    return redirect()->route('data.index');
  }
}
