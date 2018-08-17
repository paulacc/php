<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
   public function buscarPeliculaId($id)
   {

     $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max" ];


       if(!isset($peliculas[$id])){
           echo "Ingresar pelicula valida";
       }else{
         return $peliculas[$id];

       }

   }

   public function buscarPeliculaNombre($nombre)
   {
     $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max" ];


        foreach ($peliculas as  $pelicula) {
                 if(strtolower($nombre) == strtolower($pelicula)){
                   return $nombre;
                 }
        }
         return 'mo se encontro la pelicula';



   }

}
