@extends('plantilla')
@section('title', 'Datos personales')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/personales.css')}}>
@endsection 

@section('content')
<div class="burbuja">
    <h1>Datos personales </h1>
    <form action="{{ url('/terceraPagina')}}" method="GET">
        <input type="text" placeholder="Nombre completo">
        <br>
        <input type="text" placeholder="Genero">
        <br>
        <input type="text" placeholder="Año de graduación">
        <br>
        <input type="text" placeholder="Ciudad">
        <br>
        <input type="text" placeholder="Correo electronico">
        <br>
        <input type="text" placeholder="Número de telefono">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= {{asset('imagenes/P.png')}} alt="P">
</div>    

@endsection