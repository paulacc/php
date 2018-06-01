<?php
echo $_POST ['email'];
/*foreach ($_POST as $key => $value) {


  echo "$value <br>";


  if(isset($_GET['submit'])){//to run PHP script on submit
  if(!empty($_GET['pasatiempo'])){
  // Loop to store and display values of individual checked checkbox.
  foreach($_GET['pasatiempo'] as $selected){
  echo $selected."</br>";
  }
  }
  }

}*/

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php if ($_POST): ?>
  			<p>Muchas Gracias por registrarte <?=$_POST['name']?>, nos has dicho que tu país de nacimiento es <?=$_POST['pais']?>. Hemos registrado tu email, <?=$_POST['email']?>.</p>

  			<?php $hobbies = implode(", ", $_POST['hobbies']);?>

  			<p>Tus pasatiempos son: <?=$hobbies;?>.</p>
  		<?php endif; ?>

  </body>
</html>
