@extends('layout.app')

@section('title')
    datos
@endsection

@section('main')
<div>
  <h3>Datos personales</h3>
  <p>Nombre: nombre</p>
  <p>Apellido paterno: apellido</p>
  <p>Apellido materno: apellido</p>
  <p>RFC: rfc</p>
  <p>fecha de nacimiento: dd/mm/aaaa</p>
  <p>ingresos: $$$$</p>
  <p>egresos: $$$$</p>
  <p>Num-dependientes: #</p>
  <p>estado civil: estado</p>
  <p>genero: genero</p>
  <p>ultimo grado de estudios: escolaridad</p>
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