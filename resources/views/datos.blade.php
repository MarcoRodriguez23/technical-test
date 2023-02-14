@extends('layout.app')

@section('title')
    datos
@endsection

@section('main')
<div>
  <h3>Datos personales</h3>
  <div class="row">
    <div class="col-6">
      <p>Nombre: {{$cliente->nombre}}</p>
      <p>Apellido materno: {{$cliente->apellido_materno}}</p>
      <p>fecha de nacimiento: {{$cliente->fecha_nacimiento}}</p>
      <p>ingresos: ${{$cliente->ingresos}}</p>
      <p>estado civil: {{$cliente->estado_civil}}</p>
      <p>ultimo grado de estudios: {{$cliente->ultimo_grado_estudios}}</p>
      
    </div>
    <div class="col-6">
      <p>Apellido paterno: {{$cliente->apellido_paterno}}</p>
      <p>RFC: {{$cliente->rfc}}</p>
      <p>Num-dependientes: {{$cliente->no_dependientes}}</p>
      <p>egresos: ${{$cliente->egresos}}</p>
      <p>genero: {{$cliente->genero}}</p>

    </div>
  </div>
</div>
<div>
  <h3>Domicilio</h3>
  <p>calle: calle</p>
  <p>num exterior: #</p>
  <p>num interior: #</p>
  <p>colonia: colonia</p>
  <p>municipio: municipio</p>
  <p>estado: estado</p>
  <p>cp: cp</p>
</div>
<button class="btn btn-primary text-white">Actualizar domicilio</button>
<button class="btn btn-primary text-white">Recibir oferta</button>
@endsection