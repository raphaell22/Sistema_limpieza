@extends('layout/template')

@section('title', 'Registrar Cliente')


@section('contenido')
    
@if ($errors->any)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li> 
          @endforeach 
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
@endif
<div class="container py-4">      
    <h2>Registrar Cliente</h2>

   

<main>
 
    <form action="{{url('cliente')}}" method="post">
        @csrf   

        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}"required>
        </div>

        <div class="mb-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="apellido" id="apellido" value="{{old('Apellido')}}"required>
        </div>


        <div class="mb-3 row">
            <label for="cedula" class="col-sm-2 col-form-label">Cedula/Rif</label>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="cedula" id="nombre" value="{{old('cedula')}}"required>
        </div>

        <div class="mb-3 row">
            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{old('telefono')}}"required>
        </div>


        <div class="mb-3 row">
            <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="direccion" id="direccion" value="{{old('direccion')}}"required>
        </div>

       
       

   <div class="container py-4">
 <a href="{{url('cliente')}}" class="btn btn-secondary btn-lg">Regresar</a>
    
<button type="submit"  class="btn btn-success btn-lg">Guardar</button>
   </div>

</div>
    
</form>*
   
</div>
</main>