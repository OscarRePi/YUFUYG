<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <h1>Registro</h1>
    <?php
    $anfitrion = 'localhost';
    $usuario = 'root';
    $contraseña = 'root';
    $database = 'agenciaviajes';
    $puerto = '3306';
    $conexion = mysqli_connect ($anfitrion, $usuario, $contraseña, $database, $puerto);

    if ($conexion===false) {
      die("Error al conectar con la base de datos");
    }
    else {
      echo "conectado a la base de datos $database";
    }
     ?>

  </body>
</html>
