<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
	public function directory()
	{
    $actores = Actor::all();
		$actores = $this->actors;

		return view('actores', compact('actores'));
	}
}
