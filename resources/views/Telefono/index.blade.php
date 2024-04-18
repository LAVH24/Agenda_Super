@extends('layouts.principal')

@section('hijos')

<br>
<h3 style="color: BLue;">Telefonos Agregados</h3 > 
<br>

<a href="/Telefono/{{$idPersonal}}/create" class="btn btn-primary" style="color: Yellow;">Nuevo Teléfono</a>

<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="cr7">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="cr7">ID</th>
                  <th scope="cr7">idpersonal</th>
                  <th scope="cr7">telefono</th>
                  <th scope="cr7">Cambios</th>
                </tr>
              </thead>
              <tbody>
                @foreach($telefonos as $telefono)

                @if($telefono->idpersonal==$idPersonal)
                <tr>
                    <th>{{$telefono->id}}</th>
                    <th>{{$telefono->idpersonal}}</th>
                    <th>{{$telefono->telefono}}</th>
                    <th>
                        <a href="/Telefono/{{$telefono->id}}/edit" class="btn btn-info" style="color: Yellow;">Editar</a>
                       
                        <a href="/Telefono/{{$telefono->id}}/eliminar" class="btn btn-danger" style="color: Yellow;">Eliminar</a>
                    </th>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection