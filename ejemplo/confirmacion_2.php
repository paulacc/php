<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php if ($_POST): ?>
			<p>Muchas Gracias por registrarte <?=$_POST['name']?>, nos has dicho que tu país de nacimiento es <?=$_POST['country']?>. Hemos registrado tu email, <?=$_POST['email']?>.</p>

			<?php $hobbies = implode(", ", $_POST['hobbies']);?>

			<p>Tus pasatiempos son: <?=$hobbies;?>.</p>
		<?php endif; ?>
	</body>
</html>
