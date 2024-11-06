@extends('plantilla')
@section('title', 'Egresados')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/diseniol.css')}}>
@endsection 

@section('content')
    <h3>¡Egresados!</h3>
    <h4>Registren su recorrido y compartan su legado.</h4>
    <div class="caja">
        <h1>Bienvenidos! </h1>
        <h2>Ingresa tus datos</h2>

        <form action="{{ url('/segundaPagina')}}" method="GET">
            <input type="text" placeholder="Matricula">
            <br>
            <br>
            <input type="password" placeholder="Contraseña">
            <br>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
    <img src= {{asset('imagenes/mesa.jpg')}} alt="mesa">
@endsection
