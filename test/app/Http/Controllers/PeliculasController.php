<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    
	protected $peliculas;

	function __construct()
	{
		$this->peliculas = [
			1 => "Toy Story",
			2 => "Buscando a Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episodio V",
			5 => "Up",
			6 => "Mary and Max"
		];
	}

	public function listar()
	{
		$peliculas = $this->peliculas;
		
		return view('peliculas', compact('peliculas'));
	}

	public function buscarPeliculaId($id)
	{

		if(isset($this->peliculas[$id])) {

			$peliculas = [ $this->peliculas[$id] ];

		} else {

			$peliculas = [];

		}

		return view('peliculas', compact('peliculas'));	

	}


	public function buscarPeliculaNombre($nombre)
	{
		foreach ($this->peliculas as $pelicula) {
			
			if(strtolower($nombre) == strtolower($pelicula)) {
				return $pelicula;
			}

		}

		return 'No se encontró la película';
	}

}
