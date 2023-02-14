@extends('layout.app')

@section('title')
  datos
@endsection

@section('main')
<div>
  <div class="row text-center">
    <div class="col-md-6">
      <p class="fw-bold p-2 border rounded">
        Nombre: 
        <span class="fw-normal">{{$cliente->nombre}}</span> 
      </p>
      <p class="fw-bold p-2 border rounded">
        Apellido paterno: 
        <span class="fw-normal">{{$cliente->apellido_paterno}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Apellido materno: 
        <span class="fw-normal">{{$cliente->apellido_materno}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        RFC: 
        <span class="fw-normal">{{$cliente->rfc}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Fecha de nacimiento: 
        <span class="fw-normal">{{$cliente->fecha_nacimiento}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Genero: 
        <span class="fw-normal">{{$cliente->genero}}</span>
      </p>

    </div>

    <div class="col-md-6">
      <p class="fw-bold p-2 border rounded">
        Ingresos: 
        <span class="fw-normal">${{$cliente->ingresos}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Egresos: 
        <span class="fw-normal">${{$cliente->egresos}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Num-dependientes: 
        <span class="fw-normal">{{$cliente->no_dependientes}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Estado civil:
        <span class="fw-normal">{{$cliente->estado_civil}}</span>
      </p>
      <p class="fw-bold p-2 border rounded">
        Grado de estudios: 
        <span class="fw-normal">{{$cliente->ultimo_grado_estudios}}</span>
      </p>
    </div>
  </div>
</div>

<div>

  <h3 class="text-center">Domicilio</h3>
  @include('form',['domicilio'=>$cliente->domicilio])

</div>
<button class="btn btn-primary text-white">Recibir oferta</button>
@endsection