@extends('layouts.principal')

@section('hijos')
<br>
<h3 style="color: BLue;">Nuevo Personal</h3>
<br>
<div class="container">
<div class="row">
<div class="cr7">

<form action="/Personal" method = "POST">
    @csrf
    <div class="mb-2">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-2">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control" >
    </div>

    <div class="mb-2">
    <label for="">Edad</label>
    <input type="text" name="edad"  class="form-control" >
    </div>

    <div class="mb-2">
    <label for="">Email</label>
    <input type="text" name="Email"  class="form-control">
    </div>
    <div class="mb-2">
    <label for="">Telefono</label>
    <input type="text" name="Telefono"  class="form-control">
    </div>
    
    <button type="submit" style="color: BLue;">Guardar</button >
</form>

</div>
</div>
</div>


@endsection