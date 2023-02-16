<?php

namespace App\Http\Controllers;

use App\DatosOferta;
use App\DatosCliente;
use App\DatosDomicilio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    
  public function show($rfc)
  {
    // Validar el RFC
    $validator = Validator::make(['rfc' => $rfc], [
      'rfc' => 'required|alpha_num|max:10'
    ]);
    
    if ($validator->fails()) {
      return response()->json([
        'error' => 'RFC invalido'
      ], 400);
    }
    
    // Consultar la persona por RFC
    $rfc = strtoupper($rfc);
    $cliente = DatosCliente::where('rfc',$rfc)->first();
    
    if ($cliente) {
      $domicilio = DatosDomicilio::find($cliente->cliente_id);
      $oferta = DatosOferta::find($cliente->cliente_id);
      $array = [
        'datos_cliente' => $cliente,
        'datos_domicilio' => $domicilio,
        'datos_oferta' => $oferta,
      ];
      return response()->json($array);

    } else {
      return response()->json([
        'error' => 'RFC no registrado'
      ], 404);
    }

  }

  public function dates($start_date, $end_date)
  {
    // Validar los parámetros de entrada
    $validator = Validator::make(['start_date'=>$start_date,'end_date'=>$end_date], [
      'start_date' => 'required|date|before_or_equal:end_date',
      'end_date' => 'required|date|after_or_equal:start_date'
    ]);

    if ($validator->fails()) {
      return response()->json([
        'error' => 'Fechas mal capturadas'
      ], 400);
    }

    $formatted_start_date = Carbon::createFromFormat('d-m-Y',$start_date)->format('Y-m-d');
    $formatted_end_date = Carbon::createFromFormat('d-m-Y',$end_date)->format('Y-m-d');

    // Consultar los clientes por rango de fechas de registro
    $clientes = DatosCliente::whereBetween('updated_at', [
      $formatted_start_date,
      $formatted_end_date
    ])->get();

    if ($clientes->count() > 0) {
      return response()->json($clientes);
    } else {
      return response()->json([
        'error' => 'No se encontraron registros entre '. $start_date. ' y '. $end_date 
      ], 404);
    }
  }
}
