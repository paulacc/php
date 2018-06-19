
<?php
$usuario = '';
if ($_POST) {
    $usuario = $_POST['name'] . " " . $_POST['lastname'];
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            nombre
            <input type="text" name="name" value="">
            <br>
            <label for="asd">apellido</label>
            <input  id="asd" type="text" name="lastname" value="">
            <br>
            <button type="submit" >Enviar</button>
        </form>


        <h2>bienvenido <?php echo $usuario; ?></h2>
    </body>
</html>


<?php
var_dump($_GET);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($_POST);



 ?>
