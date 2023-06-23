@extends('layouts.app')

@section('content')
<div class="container">
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
</div>

<div class="alert alert-success alert-dismissible" role="alert"> 
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" >&times;</span>
</button>

</div>


<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>    
<br>
<br>    
<table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th >#</th>
                <th >Foto</th>
                <th >Nombre</th>
                <th >Apellido Patarno</th>
                <th >Apellido Materno</th>
                <th >Correo</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody>
           @foreach($empleados as $empleado) 
            <tr class="">
               <td>{{$empleado->id}}</td>
               <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" alt="foto" srcset="" hieght="70" width="50">
                </td> 
               <td>{{$empleado->Nombre}}</td>
               <td>{{$empleado->ApellidoPaterno}}</td>
               <td>{{$empleado->ApellidoMaterno}}</td>
               <td>{{$empleado->correo}}</td>
               <td><a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a>|
                  <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
                  @csrf  
                  {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger"/>
</form>
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @endsection

