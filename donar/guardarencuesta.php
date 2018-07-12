<?php
$encuesta=$_GET['id'];
$nombre = $_POST['nombre'];
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', E_ALL ^ E_DEPRECATED);
$preguntas=$_POST['preguntas'];
print_r($preguntas);
$dni = '';
$provincia = '';
$telefono = '';
$estado = 'Sin tratar';
$telefono = $_POST['telefono'];
$ptelefono = $_POST['ptelefono'];
$celular = $_POST['telefono2'];
$pcelular = $_POST['ptelefono2'];
$url= 'https://donar.proyectopuravida.org.ar/encuestamenosdatos.html';
$mail = $_POST['email'];
$edad = $_POST['edad'];
$comentario = $_POST['o8'];
//$para = 'pcastex@proyectopuravida.org,sberardossi@proyectopuravida.org.ar,gduran@proyectopuravida.org,cpiovano@proyectopuravida.org';
//$titulo = 'Formulario contacto encuesta "Encuesta"';
//$header = 'From: ' . 'info@proyectopuravida.org.ar';
//$msjCorreo = "Se a completado el formulario contacto: Encuesta\n\n URL: $url\n\n Nombre: $nombre\n Apellido: $apellido\n Celular: $pref_celular $celular\n  Email: $mail\n ";

$db_servidor = "190.210.39.3";
    $db_base = "puravidaorg";
    $db_usuario = "ppvlanding";
    $db_clave = "puravida";

    $conexion = mysql_connect($db_servidor, $db_usuario, $db_clave) or die("No se pudo conectar al servidor.");
    $selected = mysql_select_db($db_base, $conexion) or die("No se pudo abrir la base de datos.");
   
	//insertar participante
	$query = "INSERT INTO `participantes`
	(`fecha`, `hora`, `url_landing`, `nombre`,`telefono`,`celular`, `ptelefono`, `pcelular`, `mail`, `edad`,comentario)
	VALUES (now(),now(),'$url','$nombre','$telefono','$celular','$ptelefono','$pcelular','$mail','$edad','$comentario')";
     mysql_query($query, $conexion) or die("Error: ".mysql_error().". Ocurrido en ".__FILE__.", linea: ". __LINE__);

  echo $id_participante = mysql_insert_id();
	
	
	 $query = "SELECT MAX(id) FROM `encuesta_respuestas`";
    $result = mysql_query($query, $conexion) or die('Consulta fallida: ' . mysql_error());
    $latestId = mysql_fetch_row($result);
    $id = $latestId[0] + 1;
	
	foreach ($preguntas as $key => $value) {
		    
			$texto=$_POST['o'.$key];
			echo $query ="INSERT INTO `encuesta_respuestas`
			( id,`participante_id`, `pregunta_id`, `opcion_id`, `personalizado`, `fecha`)
			VALUES
			($id, $id_participante,'$key','$value','$texto',now())";
			 mysql_query($query, $conexion) or die("Error: ".mysql_error().". Ocurrido en ".__FILE__.", linea: ". __LINE__);
    }
	
	
$texto = " Nombre:$nombre \r\n edad:$edad\r\n celular:$pcelular)$celular \r\n Telefono :($ptelefono)$telefono";
	
require("PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();  

$mail->From     = "reportes@proyectopuravida.org"; // Mail de origen
$mail->FromName = "Proyecto Pura Vida"; // Nombre del que envia
$mail->AddAddress("pcastex@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones
$mail->AddAddress("cpiovano@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones
$mail->AddAddress("msurmani@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones
$mail->AddAddress("gduran@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones
$mail->AddAddress("igaldos@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones

$mail->WordWrap = 50; // Largo de las lineas 
$mail->IsHTML(true); // Podemos incluir tags html
$mail->Subject  =  "Pura Vida encuesta"; 	
$mail->Body     =  utf8_decode($texto);	
$mail->AltBody  =  strip_tags($mail->Body); // Este es el contenido alternativo sin html
$mail->IsSMTP(); // vamos a conectarnos a un servidor SMTP
$mail->Host = "smtp.gmail.com"; // direccion del servidor
$mail->Username = "todos.somos@proyectopuravida.org"; // usuario
$mail->Password = "todossomos01"; // contrase?a
$mail->Port = 587;
$mail->SMTPSecure ='tls';
$mail->SMTPAuth = true; // usaremos autenticacion 
echo $mail->Send();
echo "Ha ocurrido un error, el mensaje no ha sido enviado: " . $mail->ErrorInfo;