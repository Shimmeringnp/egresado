@extends('plantilla')
@section('title', 'Trayectoria profesional')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/trayectoria.css')}}>
@endsection 

@section('content')
<div class="burbuja">
    <h1>Trayectoria profesional </h1>
    <form action="{{ url('/terceraPagina')}}" method="GET">
        <input type="text" placeholder="Puesto o cargo actual">
        <br>
        <input type="text" placeholder="Empresa actual">
        <br>
        <input type="text" placeholder="Fecha de inicio de trabajo">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <img src= {{asset('imagenes/t.png')}} alt="t">
</div>    
@endsection




