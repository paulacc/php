<?php
  $db=new PDO('mysql:host=localhost;dbname=movies_db',
  'root','root',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
  if($_POST){
    $title = $_POST['title'];
    $rating = $_POST['rating'];
    $awards = $_POST['awards'];
    $length = $_POST['leght'];
    $release_date = $_POST['release_date'];

    $sql="select * FROM movies WHERE title = :title";
    $stmt = $db->prepare( $sql );
    $stmt->bindValue(':title', $title);
    $stmt->execute();
    $peli = $stmt->fetch();
    if($peli){
      $sql="update movies set (title = :title ,rating = :rating,awards = :awards,length = :lenght,release_date = :release_date) where title = :title";
      $stmt = $db->prepare( $sql );
      $stmt->bindValue(':title', $title);
      $stmt->bindValue(':rating', $rating);
      $stmt->bindValue(':awards', $awards);
      $stmt->bindValue(':length', $length);
      $stmt->bindValue(':release_date', $release_date);
      $stmt->execute();
      echo "se modifico exitosamente";
    }else{
      $sql="insert into movies (title,rating,awards,length,release_date) values ( :title, :rating, :awards, :length, :release_date)";
      $stmt = $db->prepare( $sql );
      $stmt->bindValue(':title', $title);
      $stmt->bindValue(':rating', $rating);
      $stmt->bindValue(':awards', $awards);
      $stmt->bindValue(':length', $length);
      $stmt->bindValue(':release_date', $release_date);
      $stmt->execute();
      echo "se guardo exitosamente";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Pelicula</title>
</head>

<body>
	<form method="post">
		<div>
			<label>Titulo</label>
			<input type="text" name="title" >
		</div>
		<div>
			<label>Rating</label>
			<input type="text" name="rating" >
		</div>
		<div>
			<label>Premios</label>
			<input type="text" name="awards" >
		</div>
		<div>
			<label>Duracion</label>
			<input type="text" name="leght" >
		</div>
		<div>
			<label>Fecha de Estreno</label> <br>
			<input type="date" name="release_date" value="">
		</div>
		<button type="submit">Guardar película</button>
	</form>
</body>

</html>
