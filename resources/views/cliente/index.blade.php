@extends('layout/template')

@section('title', 'Cliente')


@section('contenido')
    
<main>
    <div class="container py-4">
    <h2>Listado de Clientes</h2>
    <a href="{{url('cliente/create')}}" class="btn btn-primary btn-lg">Nuevo Registro</a>
    <a href="{{url('welcome')}}" class="btn btn-primary btn-lg">Pagina Inicio</a>
    <table class="table table-hover">

        <thead>
            <tr>
               <th>#</th>
               <th>Nombre</th> 
               <th>Apellido</th>
               <th>Cedula/Rif</th>
               <th>Telefono</th>
               <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $cliente)
                
           <td>{{$cliente->id}}</td>
           <td>{{$cliente->nombre}}</td>
           <td>{{$cliente->apellido}}</td>
           <td>{{$cliente->cedula_rif}}</td>
           <td>{{$cliente->telefono}}</td>
           <td>{{$cliente->direccion}}</td>
           
            <tr>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>
</main>
    
