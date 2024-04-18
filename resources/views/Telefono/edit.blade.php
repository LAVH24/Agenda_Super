@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: BLue;"> Editar Telefono </h3>
<br>


<form action="/Telefono/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">ID</label>
    <input type="text" name="idpersonal" id="idpersonal" value="{{$editarRegistro->idpersonal}}">

    <label for="">Telefono</label>
    <input type="text" name="Telefono" id="Telefono" value="{{$editarRegistro->telefono}}">

    <button type="submit " style="color: BLue;">Guardar</button>

</form>


@endsection