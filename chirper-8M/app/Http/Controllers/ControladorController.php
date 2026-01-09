<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    public function index()
    {
        $datos= "titulo";
        $datos_modelo=[
            [
                "meme" => "Esto es un meme del 8M",
                "usuario" => "usuario1"
            ],
            [
                "meme" => "Otro meme del 8M",
                "usuario" => "usuario2"
            ]
        ];
        return view('ejemplo_mvc',["nombre_titulo"=>$datos,"datos_modelo"=>$datos_modelo]);
    }
}
