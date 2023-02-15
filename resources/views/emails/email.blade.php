<!DOCTYPE html>
<html lang="en">
<head>
  <title>UThis Credit - Nueva oferta aceptada</title>
</head>
<body>
  <h1>El día de hoy recibiste una nueva oferta</h1>
  <main>
    <h3>Datos del solicitante</h3>
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
      Ingresos: 
      <span class="fw-normal">${{$cliente->ingresos}}</span>
    </p>
    <p class="fw-bold p-2 border rounded">
      Egresos: 
      <span class="fw-normal">${{$cliente->egresos}}</span>
    </p>

    <h3>Datos del prestamo</h3>
    <p class="fw-bold p-2 border rounded">
      Monto: 
      <span class="fw-normal">${{$cliente->oferta->monto}}</span>
    </p>
    <p class="fw-bold p-2 border rounded">
      Plazo: 
      <span class="fw-normal">{{$cliente->oferta->plazo}}</span>
    </p>
    <p class="fw-bold p-2 border rounded">
      Pago mensual: 
      <span class="fw-normal">${{$cliente->oferta->pago_mensual}}</span>
    </p>
    <p class="fw-bold p-2 border rounded">
      Tasa de interes: 
      <span class="fw-normal">{{$cliente->oferta->tasa_interes}}</span>
    </p>
  </main>
</body>
</html>