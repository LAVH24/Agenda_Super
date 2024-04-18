@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: red;">Eliminar Email</h3>
<br>
<form action="/Email/{{$eliminarRegistro2->id}}" method="POST">
    @csrf
    @method('Delete')
    <label for="">IdPersona</label>
    <input type="text" name="idpersonal"  id="idpersonal" value="{{$eliminarRegistro2->idpersonal}}">

    <label for="">Email</label>
    <input type="text" name="Email"  id="Email" value="{{$eliminarRegistro2->Email}}">

    <button type="submit" style="color: red;">Eliminar</button>
</form>

@endsection