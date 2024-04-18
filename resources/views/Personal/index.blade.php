@extends('layouts.principal')

@section('hijos')
<br>

<h2 >Agenda Personal</h2>
<br>
<br>

<a href="Personal/create" class="btn btn-primary"  style="color: black;">Nuevo Personal</a>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="cr7">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="cr7">Id</th>
                  <th scope="cr7">Nombre</th>
                  <th scope="cr7">Apellido</th>
                  <th scope="cr7">Edad</th>
                  <th scope="cr7">Email </th>
                  <th scope="cr7">Telefono </th>
                  <th scope="cr7">Cambios</th>
                </tr>
              </thead>
              <tbody>
                @foreach($Personal as $personal)
                <tr>
                    <th>{{$personal->id}}</th>
                    <th>{{$personal->nombre}}</th>
                    <th>{{$personal->apellido}}</th>
                    <th>{{$personal->edad}}</th>
                    <th>{{$personal->Email}}</th>
                    <th>{{$personal->Telefono}}</th>
                    
                    <th>
                    <a href="/Telefono/{{$personal->id}}" class="btn btn-success" style="color: black;">Agregar Telefono Secundario</a>
                    <a href="Email/{{$personal->id}}" class="btn btn-success" style="color: black;">Agregar Email Secundario</a>
                        <a href="Personal/{{$personal->id}}/edit" class="btn btn-info" style="color: black;">Modificar </a>
                        
                        
                    </th>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection