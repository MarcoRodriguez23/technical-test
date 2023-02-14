<form class="border p-4 rounded" method="POST" action="{{route('data.store')}}">
  @csrf

  <div class="mb-3">
    <label for="cp" class="form-label">cp</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="cp" 
      placeholder="Ingrese aqui su cp" 
      name="cp"
      value="{{$domicilio->cp ? $domicilio->cp : old('rfc')}}"
    >
  </div>

  <div class="mb-3">
    <label for="calle" class="form-label">calle</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="calle" 
      placeholder="Ingrese aqui su calle" 
      name="calle"
      value="{{$domicilio->calle ? $domicilio->calle : old('calle')}}"
    >
  </div>

  <div class="mb-3">
    <label for="no_exterior" class="form-label">no_exterior</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="no_exterior" 
      placeholder="Ingrese aqui su no_exterior" 
      name="no_exterior"
      value="{{$domicilio->no_exterior ? $domicilio->no_exterior : old('no_exterior')}}"
    >
  </div>

  <div class="mb-3">
    <label for="no_interior" class="form-label">no_interior</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="no_interior" 
      placeholder="Ingrese aqui su no_interior" 
      name="no_interior"
      value="{{$domicilio->no_interior ? $domicilio->no_interior : old('no_interior')}}"
    >
  </div>

  <div class="mb-3">
    <label for="colonia" class="form-label">colonia</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="colonia" 
      placeholder="Ingrese aqui su colonia" 
      name="colonia"
      value="{{$domicilio->colonia ? $domicilio->colonia : old('colonia')}}"
    >
  </div>
  <div class="mb-3">
    <label for="municipio" class="form-label">municipio</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="municipio" 
      placeholder="Ingrese aqui su municipio" 
      name="municipio"
      value="{{$domicilio->municipio ? $domicilio->municipio : old('municipio')}}"
    >
  </div>
  <div class="mb-3">
    <label for="estado" class="form-label">estado</label>
    <input 
      type="text" 
      class="form-control rounded-0 py-2" 
      id="estado" 
      placeholder="Ingrese aqui su estado" 
      name="estado"
      value="{{$domicilio->estado ? $domicilio->estado : old('estado')}}"
    >
  </div>

  <button type="submit" class="btn btn-primary text-white mx-auto d-block">Actualizar domicilio</button>
</form>
