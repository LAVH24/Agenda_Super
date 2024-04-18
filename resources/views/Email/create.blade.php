@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: BLue;">Agregar Correo</h3>
<br>
<div class="container">
<div class="row">
<div class="cr7">
    
<form action="/Email" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">IdPersona</label>
    <input type="text" value='{{$id}}'  name="idpersonal" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Email</label>
    <input type="text" name="Email"  class="form-control" >
    </div>

    <button type="submit " style="color: BLue;">Guardar</button>
    
</form>
</div>
</div>
</div>


@endsection