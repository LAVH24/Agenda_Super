@extends('layouts.principal')

@section('hijos')

<br>

<h3 style="color: BLue;">Emails</h3>
<br>


<a href="/Email/{{$idPersonal}}/create" class="btn btn-primary" style="color: yellow;">Agregar Nuevo Email</a>


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
                  <th scope="cr7">Email</th>
                  <th scope="cr7">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($emails as $Email)

                @if($Email->idpersonal==$idPersonal)
                <tr>
                    <th>{{$Email->id}}</th>
                    <th>{{$Email->idpersonal}}</th>
                    <th>{{$Email->Email}}</th>
                    
                    <th>
                        <a href="/Email/{{$Email->id}}/edit" class="btn btn-info" style="color: yellow;">Editar</a>
                        <a href="/Email/{{$Email->id}}/eliminar" class="btn btn-danger" style="color: yellow;">Eliminar</a>
                        
                        
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