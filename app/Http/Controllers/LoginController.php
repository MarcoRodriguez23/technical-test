<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\ClientException;

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
        'email' => env('EMAIL_API'),
        'password' => env('PASSWORD_API')
      ]
    ]);

    $token = json_decode($response->getBody()->getContents())->token;

    try {
      $client = new Client([
        'verify' => false,
      ]);
        $response = $client->post('https://sitiowebdesarrollo.centralus.cloudapp.azure.com/api/datosRenovacion', [
          'headers' => [
            'Authorization' => 'bearer ' . $token,
          ],
          'json' => [
            // UAMH880216
            'rfc' => strtoupper($request->rfc)
          ]
        ]);
          
      $data = json_decode($response->getBody()->getContents());
  
      dd($data);

    } catch (ClientException $e) {
      $response = $e->getResponse();
      $message = json_decode($response->getBody()->getContents(), true)['message'];

      dd($message);
    }

    return redirect()->route('data.index');
  }
}
