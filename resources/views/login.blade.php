@extends('layout.app')

@section('title')
  Login
@endsection

@section('main')
<form class="border p-4 rounded" method="POST" action="{{route('login.store')}}">
  @csrf
  <div class="mb-3">
    <label for="rfc" class="form-label">RFC</label>
    <input type="text" class="form-control rounded-0 py-2" id="rfc" placeholder="Ingrese aqui su RFC">
  </div>
  <button type="submit" class="btn btn-primary text-white mx-auto d-block">Submit</button>
</form>
@endsection