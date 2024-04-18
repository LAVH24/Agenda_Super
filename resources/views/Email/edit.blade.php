@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: BLue;"> Editar Email </h3>
<br>

<form action="/Email/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">ID</label>
    <input type="text" name="idpersonal" id="idpersona" value="{{$editarRegistro->idpersonal}}">

    <label for="">Email</label>
    <input type="text" name="Email" id="Email" value="{{$editarRegistro->Email}}">

    <button type="submit" style="color: BLue;">Guardar</button>

</form>


@endsection