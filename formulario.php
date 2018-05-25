
 <!DOCTYPE HTML>
<html>

<head>

        <meta charset="utf-8">

        <title>Formulario PHP</title>

</head>

<body>

            <form action="imprimir.php" method="post">

            <label for="nombre">Nombre:</label>

            <input type="text" name="nombre" id="nombre">

            <br>
            <label for="email">E-mail:</label>

            <input type="email" name="email" id="email">

            <br>

            <label for="hobbies">¿Qué hobbies tenés?</label>
             <br>
            <input type="checkbox" name="leer" value="leer"> Leer<br>
            <input type="checkbox" name="teatro" value="teatro" > Ir al teatro<br>
            <input type="checkbox" name="cine" value="cine"> Ir al cine <br>
            <input type="checkbox" name="pasear" value="pasear"> Pasear<br>
            <br>

              <label for="genero"> Genero</label>
              <input type="radio" name="gender" value="masculino"> Masculino<br>
              <input type="radio" name="gender" value="femenino"> Femenino<br>
              <input type="radio" name="gender" value="otro"> Otro <br>

            <button type="submit">Dale caña</button>

            </form>



</body>

</html>
