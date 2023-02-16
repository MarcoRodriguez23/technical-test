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
      value="{{$domicilio->cp ? $domicilio->cp : old('cp')}}"
      maxlength="5"
      oninput=
      "this.value = this.value.replace(/[^0-9]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="30"
      oninput=
      "this.value = this.value.replace(/[^a-zA-Z 0-9 áéíóú ÁÉÍÓÚ]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="3"
      oninput=
      "this.value = this.value.replace(/[^0-9]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="3"
      oninput=
      "this.value = this.value.replace(/[^0-9]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="35"
      oninput=
      "this.value = this.value.replace(/[^a-zA-Z áéíóú ÁÉÍÓÚ]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="25"
      oninput=
      "this.value = this.value.replace(/[^a-zA-Z áéíóú ÁÉÍÓÚ]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
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
      maxlength="30"
      oninput=
      "this.value = this.value.replace(/[^a-zA-Z áéíóú ÁÉÍÓÚ]/,'')
      if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
    >
  </div>

  <button type="submit" class="btn btn-primary text-white mx-auto d-block">Actualizar domicilio</button>
</form>
