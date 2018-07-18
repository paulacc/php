<?php

    require_once("BaseDeDatos.php");

    if (BaseDeDatos::ExisteRegistro(18, "Movies") == true) {
      echo "El 18 existe en Movies";
    } else {
      echo "El 18 NO existe en Movies";
    }

    if (BaseDeDatos::ExisteRegistro(5, "Genres") == true) {
      echo "El 5 existe en Genres";
    } else {
      echo "El 5 NO existe en Genres";
    }

    $Id=6;
    $NombreTabla="Seasons";
    if (BaseDeDatos::ExisteRegistro($Id, $NombreTabla) == true) {
      echo "El {$Id} existe en {$NombreTabla}";
    } else {
      echo "El {$Id} NO existe en {$NombreTabla}";
    }




/*
    $MiPelicula = new pelicula("Toy Story");


    $Todas=Peliculas::ObtenerTodas();

    foreach ($Todas as $UnaPeliDelArray) {
      echo "El id es: {$UnaPeliDelArray->getId()} y el titulo es: {$UnaPeliDelArray->titulo} <br>";
    }





    echo "Id: {$MiPelicula->getId()} - Rating: {$MiPelicula->rating}<br>";



    //$sql = "insert into usuarios (nombre, username) values ('{$nombre}', '{$username}')";


















//

/*

require_once("connect.php");

$CadenaDeBusqueda = "SELECT title, rating FROM movies";
$ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
$ConsultaALaBase->execute();

$MisPeliculas=array();

while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {
  $UnaPeli = new pelicula();
  $UnaPeli->titulo=$UnRegistro['title'];
  $UnaPeli->rating=$UnRegistro['rating'];

  $MisPeliculas[] = $UnaPeli;

}

    $UnPlato = new plato();

    $UnPlato->nombre="BigMac";

    $UnPlato->setPrecio(80);
    echo "Mi plato es un {$UnPlato->nombre}, cuesta $ {$UnPlato->getPrecio()}, y pesa {$UnPlato->peso} gramos.";
    $UnPlato->setPrecio(1);
    echo "Mi plato es un {$UnPlato->nombre}, cuesta $ {$UnPlato->getPrecio()}, y pesa {$UnPlato->peso} gramos.";

    $UnPlato->peso=500;


    $UnHamburguesa = new hamburguesa();
    $UnHamburguesa->nombre="Stalker 3";
    $UnHamburguesa->CantidadCarnes=3;
    $UnHamburguesa->PuntoCoccion="medio";
    //$UnHamburguesa->estaPreparado=true;

    $UnHamburguesa->preparar();

    echo "<br><br>Mi hamb es un {$UnHamburguesa->nombre}, y su punto de cocción es {$UnHamburguesa->PuntoCoccion}";

    echo "<br><br>Mi hamb está preparada?  {$UnHamburguesa->getPreparado()}";


















    require_once 'plato.php';
    require_once 'ensaladas.php';

    $EnsaladaAmericana = new Ensaladas();

    $EnsaladaAmericana->nombre="aaa";
    echo $EnsaladaAmericana->nombre;

    $BigMac = new plato();

    echo "Mi plato es un {$BigMac->nombre}, cuesta $ {$BigMac->precio}-, y pesa {$BigMac->peso} gramos";

    $BigMac->nombre="Hamburguesa";
    $BigMac->precio=90;
    $BigMac->peso=500;

    echo "<br><br>Mi plato es un {$BigMac->nombre}, cuesta $ {$BigMac->precio}-, y pesa {$BigMac->peso} gramos";

    echo "<br><br>Está preparado?  Eh?  {$BigMac->getPreparado()}";

    $BigMac->Preparar();

    echo "<br><br>Está preparado?  Eh?  {$BigMac->getPreparado()}";



     $MiAuto=new Auto("Ford", "Rojo");

     $MiAuto->setMarca("Citroen");
     $MiAuto->color="Rojo";
     $MiAuto->kilometraje=50000;

     $MiAuto->FalsearKilometraje();
     echo "Tengo un auto marca {$MiAuto->getMarca()} que cuando no está sucio se ve que es de color {$MiAuto->kilometraje}";

     echo "<br>";
     if ($MiAuto->GuardarEnBase() == true) {
       echo "Se guardó correctamente";
     } else {
       echo "Ouch!";
     }
*/

      ?>
