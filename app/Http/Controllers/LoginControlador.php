<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControlador extends Controller
{
    public function segundaPagina(){
        return view('login.inicio');
    }
    public function terceraPagina(){
        return view('login.personales');
    }
    public function cuartaPagina(){
        return view('login.academica');
    }
    public function quintaPagina(){
        return view('login.trayectoria');
    }
    public function sextaPagina(){
        return view('login.adicional');
    }
    public function septimaPagina(){
        return view('login.diplomados');
    }
    public function octavaPagina(){
        return view('login.comentarios');
    }
    public function novenaPagina(){
        return view('login.index');
    }
}
