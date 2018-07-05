<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', E_ALL ^ E_DEPRECATED);


require('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->SMTPDebug = 2;
$mail->From     = "reportes@proyectopuravida.org"; // Mail de origen
$mail->FromName = "Proyecto Pura Vida"; // Nombre del que envia
$mail->AddAddress("pcastex@proyectopuravida.org"); // Mail destino, podemos agregar muchas direcciones
$mail->WordWrap = 50; // Largo de las lineas
$mail->IsHTML(true); // Podemos incluir tags html
$mail->Subject  =  "Pura Vida prueba";
$mail->Body     =  utf8_decode('prueba');
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
