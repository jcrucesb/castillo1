<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Necesitamos agregar el middleware que creamos anteriormente.
use Illuminate\Http\Middleware\SoloAdmin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        //Con este middleware se verifica que el usuario esté logeado.
        $this->middleware('auth');
        //Colocamos acá el middleware que creamos.
        $this->middleware('soloadmin',['only' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); //La ruta home solo será para el Administrador.
    }

    public function getUser(){
        
        return view('user');
    }

    public function getModerador(){
        
        return view('moderador');
    }

    public function getSuper(){
        
        return view('superAdmin');
    }
}
