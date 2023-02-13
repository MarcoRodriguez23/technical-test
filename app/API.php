<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class API
{
  public $token;

  public function __construct()
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

    return $this->token = json_decode($response->getBody()->getContents())->token;
  }

  public function getDatos($rfc)
  {
    try {
      $client = new Client([
      'verify' => false,
      ]);
      $response = $client->post('https://sitiowebdesarrollo.centralus.cloudapp.azure.com/api/datosRenovacion', [
        'headers' => [
          'Authorization' => 'bearer ' . $this->token,
        ],
        'json' => [
          // UAMH880216
          'rfc' => strtoupper($rfc)
        ]
      ]);
        
      $data = json_decode($response->getBody()->getContents());
      
      return $data;


    } catch (ClientException $e) {
      $response = $e->getResponse();
      $message = json_decode($response->getBody()->getContents(), true)['message'];

      return $message;
    }
  }
}
