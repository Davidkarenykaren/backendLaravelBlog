<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{

    public function listarPublicaciones()
    {
        $productos = Publicacion::all();
        return $productos;
    }

    public function crearPublicacion(Request $request)
    {
        $publicacion = new Publicacion();
        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->urlImagen = $request->urlImagen;
        $publicacion->email = $request->email;


        $publicacion->save();
    }
}