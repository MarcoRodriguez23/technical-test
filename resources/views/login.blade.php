@extends('layout.app')

@section('title')
  Login
@endsection

@section('main')
 <form action="" method="POST">
  <div>
    <label for="rfc">
      RFC
    </label>
    <input 
      id="rfc" 
      type="text" 
      placeholder="RFC"
      name="rfc"
    >
  </div>
  <input type="submit" value="Continuar">
 </form>
@endsection