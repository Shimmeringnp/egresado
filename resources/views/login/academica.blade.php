@extends('plantilla')
@section('title', 'Información academica')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/academica.css')}}>
@endsection 

@section('content')
<div class="burbuja">
    <h1>Información academica </h1>
    <form action="{{ url('/terceraPagina')}}" method="GET">
        <input type="text" placeholder="Intituto/Escuela">
        <br>
        <input type="text" placeholder="Año de graduación">
        <br>
        <input type="text" placeholder="Carrera o Especialidad">
        <br>
        <input type="text" placeholder="Promedio final">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= {{asset('imagenes/a.png')}} alt="a">
</div>    

@endsection

