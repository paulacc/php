<?php
require_once('classlibro.php');

if($_POST){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];

}

$miLibro = new libro;
$miLibro->setTitulo($titulo);
$miLibro->setAutor($autor);
$miLibro->setGenero($genero);

echo "El titulo de mi libro es {$miLibro->getTitulo()}, cuyo autor es {$miLibro->getAutor()} y pertenece al genero {$miLibro->getGenero()}"

 ?>
