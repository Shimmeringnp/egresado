@extends('plantilla')
@section('title', 'Registro de egresados')
@section('css')
    <link rel="stylesheet" href={{asset('diseño/inicio.css')}}>
@endsection 

@section('content')
    <h1>¡Hola! Egresado</h1>
    <h2>Gracias por haber sido parte de nuestra casa de estudios</h2>
    <div class='caja1'>
        <form action="{{ url('/terceraPagina')}}" method="GET">
            <button type="submit" class="btn1">Datos personales</button>
        </form>
        <img src= {{asset('imagenes/personal.png')}} alt="personal" class="img1">
    </div>
    <div class="caja2">    
        <form action="{{ url('/cuartaPagina')}}" method="GET">
            <button type="submit" class="btn2">Información academica</button>
        </form>
        <img src= {{asset('imagenes/academico.png')}} alt="academico" class="img2">
    </div>
    <div class="caja3">
        <form action="{{ url('/quintaPagina')}}" method="GET">
            <button type="submit" class="btn3">Trayectoria profesional</button>
        </form>
        <img src= {{asset('imagenes/avion.png')}} alt="avion" class="img3">
    </div>
    <div class="caja4">
        <form action="{{ url('/sextaPagina')}}" method="GET">
            <button type="submit" class="btn4">Educacion adicional (Opcional) </button>
        </form>
        <img src= {{asset('imagenes/sombrero.png')}} alt="sombrero" class="img4">
    </div>
    <div class="caja5">
        <form action="{{ url('/septimaPagina')}}" method="GET">
            <button type="submit" class="btn5">Diplomado</button>
        </form>
        <img src= {{asset('imagenes/documento.png')}} alt="documento" class="img5">
    </div>
    <div class="caja6">
        <form action="{{ url('/octavaPagina')}}" method="GET">
            <button type="submit" class="btn6">Comentarios (Opcional) </button>
        </form>
        <img src= {{asset('imagenes/idea.png')}} alt="idea" class="img6">
    </div>
    <form action="{{ url('/novenaPagina')}}" method="GET">
        <button type="submit" class="btn8">Salir</button>
    </form>
    <div>
        <form>

        </form>    
    
    </div>    
    <img src= {{asset('imagenes/lobo.png')}} alt="lobo" class="img7">
@endsection
