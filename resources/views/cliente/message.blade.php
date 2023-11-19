@extends('layout/template')

@section('title', 'Registrar Cliente')


@section('contenido')
  <main>
    <div class="container py-4"></div>
    <h2>{{$msg}}</h2>
    <a href="{{url('cliente')}}"class="btn btn-secondary">Regresar</a>
  </main>


