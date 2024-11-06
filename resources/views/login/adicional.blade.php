@extends('plantilla')
@section('title', 'Educacion adicional')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/adicional.css')}}>
@endsection 

@section('content')
<div class="burbuja">
    <h1>Educación adicional</h1>
    <form action="{{ url('/terceraPagina')}}" method="GET">
        <input type="text" placeholder="Estudios o posgrados">
        <br>
        <input type="text" placeholder="Cursos o certificaciones">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= {{asset('imagenes/e.png')}} alt="e">
</div>    
@endsection