<?php
	$categorias = file_get_contents('categorias.json');
	$categoriasJson = explode(PHP_EOL, $categorias);
	array_pop($categoriasJson);
	$categoriasPHP = [];

	foreach ($categoriasJson as $categoria) {
		$categoriasPHP[] = json_decode($categoria, true);
	}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Checkboxes</title>
	</head>
	<body>
		<form  method="post">
			<?php foreach ($categoriasPHP as $categoria): ?>
				<label>
					<input type="checkbox" name="hobbies[]" value="<?=$categoria['id']?>">
					<?=$categoria['nombre']?>
				</label>
			<?php endforeach; ?>
		</form>
	</body>
</html>
