<?php

namespace App\Http\Controllers;

use App\DatosOferta;
use App\DatosCliente;
use App\DatosDomicilio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    
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

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
