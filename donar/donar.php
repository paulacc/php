<?php
 $activartxt=0;
//error_reporting(E_ALL ^ E_DEPRECATED);ini_set('display_errors', '1');
//print_r($_POST);
if(!empty($_POST)
&&$_POST['nombre']!=''&&$_POST['email']!=''
&&$_POST['apellido']!=''&&$_POST['telefono']!=''
&&$_POST['dni']!=''
&&$_POST['nombre_tarjeta']!=''&&$_POST['monto']!=''
&&$_POST['nro_tarjeta']!=''){

$_POST['monto']=$_POST['monto']=='otro'?$_POST['otro']:$_POST['monto'];
$desde=isset($_GET['desde'])?$_GET['desde']:'Gael web';
$artista=isset($_POST['artista'])?str_replace("-"," ",$_POST['artista']):'';
$link=isset($_POST['desde'])?$_POST['desde']:'';

if($activartxt==0){
     $db_servidor = "190.210.39.3";
        $db_base = "puravidaorg";
        $db_usuario = "ppvlanding";
       $db_clave = "puravida";
$conexion = mysql_connect($db_servidor, $db_usuario, $db_clave) or die("No se pudo conectar al servidor.");
$selected = mysql_select_db($db_base, $conexion) or die("No se pudo abrir la base de datos."); 
    

 $query = "INSERT INTO `web`(`nombre`, `apellido`, `email`, `sexo`, `nacimiento`, `dni`,
 `direccion`, `pais`, `provincia`, `cp`, `ciudad`, `ptelefono`, `telefono`, `ptelefono2`, 
 `telefono2`, `ocupacion`, `tipo_donacion`, `nombre_tarjeta`, `monto`, `nro_tarjeta`,desde
 ,artista,link,anio_v,mes_v,cod_seguridad
 ) VALUES ( 
 '{$_POST['nombre']}', '{$_POST['apellido']}', '{$_POST['email']}', '{$_POST['sexo']}', '{$_POST['nacimiento']}', 
 '{$_POST['dni']}', '{$_POST['direccion']}', '{$_POST['pais']}', '{$_POST['provincia1']}', '{$_POST['cp']}', 
 '{$_POST['ciudad1']}', '{$_POST['ptelefono']}', '{$_POST['telefono']}', '{$_POST['ptelefono2']}', 
 '{$_POST['telefono2']}', '{$_POST['ocupacion']}', '{$_POST['tipo_donacion']}', '{$_POST['nombre_tarjeta']}',
 '{$_POST['monto']}', '{$_POST['nro_tarjeta']}','$desde','$artista',
 '$link','{$_POST['anio']}','{$_POST['mes']}','{$_POST['cod_seguridad']}')";
 
$result = mysql_query($query, $conexion) or die("Error: " . mysql_error() . ". Ocurrido en " . __FILE__ . ", linea: " . __LINE__);
}else{
echo $texto= "{$_POST['nombre']},{$_POST['apellido']},{$_POST['email']},{$_POST['sexo']},{$_POST['nacimiento']},  {$_POST['dni']}, {$_POST['direccion']}, {$_POST['pais']}, {$_POST['provincia1']}, {$_POST['cp']},  {$_POST['ciudad1']}, {$_POST['ptelefono']}, {$_POST['telefono']}, {$_POST['ptelefono2']},  {$_POST['telefono2']}, {$_POST['ocupacion']}, {$_POST['tipo_donacion']}, {$_POST['nombre_tarjeta']}, {$_POST['monto']}, {$_POST['nro_tarjeta']},$desde,$artista, $link,{$_POST['anio']},{$_POST['mes']},{$_POST['cod_seguridad']}"."\n";
$file = fopen("donaciones.txt", "a");
fwrite($file, $texto . PHP_EOL);
fclose($file);
}

$tarjetas= array("1"=>'Visa',"2"=>'Nativa',"3"=>'Naranja',"4"=>'American Express',"5"=>'DIners',
"6"=>'MasterCard',"7"=>'Cabal',"16"=>'Nevada');

$nombre_tarjeta=isset($tarjetas[$_POST['nombre_tarjeta']])?$tarjetas[$_POST['nombre_tarjeta']]:"";

  $tipo=$_POST['tipo_donacion']==-1?"todos los meses":"por unica vez";
 $mensaje = " Nombre:{$_POST['nombre']} \r\n  Apellido:{$_POST['apellido']}\r\n  Telefono Principal:{$_POST['ptelefono']}-{$_POST['telefono']} \r\n  Telefono Secundario:{$_POST['ptelefono2']}-{$_POST['telefono2']}";
$mensaje.= " \r\n Email:{$_POST['email']} \r\n Sexo:{$_POST['sexo']} \r\n  Nacimiento: {$_POST['nacimiento']} \r\n DNI:'{$_POST['dni']}\r\n Direccion:{$_POST['direccion']}\r\n Pais:{$_POST['pais']}\r\n Provincia:{$_POST['provincia1']}\r\n CP:{$_POST['cp']}\r\n Ciudad:{$_POST['ciudad1']}\r\n Ocupacion:{$_POST['ocupacion']}";
$mensaje.= "\r\n tipo:$tipo\r\n monto:{$_POST['monto']}\r\n tarjeta:{$_POST['nro_tarjeta']} \r\n Tarjeta:$nombre_tarjeta \r\n Vto:{$_POST['mes']}/{$_POST['anio']}\r\n Cod Seg:{$_POST['cod_seguridad']}";
$cabeceras = 'From: proyectopuravida.org <info@proyectopuravida.org>' . "\r\n" ;


                             
  
// Enviarlo

mail('msurmani@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);		
mail('pcastex@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('scalabrese@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('igaldos@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('gduran@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('cpiovano@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('sberardossi@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);
mail('oalvis@proyectopuravida.org', "Donacion online $desde", $mensaje,$cabeceras);


  
 
/*if($artista!=''&&$artista!="Gael web"){
$artista=isset($_POST['artista'])?str_replace(" ","-",$_POST['artista']):'';
header("Location: https://medas.proyectopuravida.org.ar/share/$artista");
}
else header('Location: https://donar.proyectopuravida.org.ar/donarfinal.php');

*/
}else{
//header('Location: https://donar.proyectopuravida.org.ar/');

}
?>
