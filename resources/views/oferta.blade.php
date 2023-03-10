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
    <span class="fw-normal">{{$oferta->tasa_interes}}</span>
  </p>
</div>
<div class="d-flex justify-content-evenly">
  @if ($oferta->decision == '')
    <form method="POST" action="{{route('oferta.update')}}">
      @csrf
      @method('PUT')
      <input type="hidden" value="aceptada" name="decision">
      <button type="submit" class="btn btn-primary text-white">
        Aceptar oferta
      </button>
    </form>
    
    <form method="POST" action="{{route('oferta.update')}}">
      @csrf
      @method('PUT')
      <input type="hidden" value="rechazada" name="decision">
      <button type="submit" class="btn btn-danger text-white">
        Rechazar oferta
      </button>
    </form>
  @else
    <p class="text-center fw-bold text-danger">Usted tomo la oferta como {{$oferta->decision}} el {{$oferta->updated_at->format('d/m/Y')}} y tendra que pasar un mes para que pueda hacer una nueva solicitud</p>
  @endif

</div>

@endsection