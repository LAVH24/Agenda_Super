@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: BLue;"> Modificar Datos Del Personal </h3>
<br>

<form action="/Personal/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')
     
  
    <label for="">ID</label>
    <br>
    <input type="text" name="id" id="id" value="{{$editarRegistro->id}}" >
    <br> <br>
    
    <label for="">Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{$editarRegistro->nombre}}">
    <br> <br>
    </div>

    <lable for="">Apellido</label>
    <br>
    <input type="text" name="apellido" id="apellido" value="{{$editarRegistro->apellido}}">
    <br> <br>

    <lable for="">Edad</label>
    <br>
    <input type="text" name="edad" id="edad" value="{{$editarRegistro->edad}}">
    <br> <br>

    <lable for="">Email</label>
    <br>
    <input type="text" name="Email" id="Email" value="{{$editarRegistro->Email}}">
    <br> <br>

    <lable for="">Telefono</label>
    <br>
    <input type="text" name="Telefono" id="Telefono" value="{{$editarRegistro->Telefono}}">
    <br><br>

    <button type="submit" style="color: BLue;">Guardar</button>

</form>



@endsection