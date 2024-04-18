@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: red;">Eliminar Registro</h3>
<br>
<form action="/Telefono/{{$eliminarRegistro2->id}}" method="POST">
    @csrf
    @method('Delete')
    <label for="">IDPERSONA</label>
    <input type="text" name="idpersonal"  id="idpersonal" value="{{$eliminarRegistro2->idpersonal}}">

    <label for="">TELEFONO</label>
    <input type="text" name="telefono"  id="telefono" value="{{$eliminarRegistro2->telefono}}">

 
    <button type="submit" style="color: red;">Eliminar</button>
</form>

@endsection