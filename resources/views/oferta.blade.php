@extends('layout.app')

@section('title')
    oferta
@endsection

@section('main')
<div>
  <p class="fw-bold p-2 border rounded">
    Monto: 
    <span class="fw-normal">${{$oferta->monto}}</span>
  </p>
  <p class="fw-bold p-2 border rounded">
    Plazo: 
    <span class="fw-normal">{{$oferta->plazo}}</span>
  </p>
  <p class="fw-bold p-2 border rounded">
    Pago mensual: 
    <span class="fw-normal">${{$oferta->pago_mensual}}</span>
  </p>
  <p class="fw-bold p-2 border rounded">
    Tasa de interes: 
    <span class="fw-normal">${{$oferta->tasa_interes}}</span>
  </p>
</div>
<div class="d-flex justify-content-evenly">
  <form method="POST" action="{{route('oferta.store')}}">
    @csrf
    <button type="submit" class="btn btn-primary text-white">
      Aceptar oferta
    </button>
  </form>
  
  <form method="POST" action="{{route('oferta.store')}}">
    @csrf
    <button type="submit" class="btn btn-danger text-white">
      Rechazar oferta
    </button>
  </form>
</div>

@endsection