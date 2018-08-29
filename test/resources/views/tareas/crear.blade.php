@extends('layout')

@section('titulo')
	Crear tarea nueva
@endsection

@section('cuerpo')

<h1>Crear tarea</h1>

<div class="errores">
	@foreach($errors->all() as $error)
		<div class="error">{{ $error }}</div>
	@endforeach
</div>

<form method="post">
	
	@include('tareas._campos')

	<div>
		<button type="submit">Crear</button>
	</div>

</form>

@endsection