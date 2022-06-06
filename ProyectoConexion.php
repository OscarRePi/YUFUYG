<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="#FFE4C4">
    <?php

    include 'ProyectoPHP.php';
    $Nombre = $_POST['Nombre'];
    $Edad = $_POST['Edad'];
    $Correo = $_POST['Correo'];
    $Telefono =$_POST['Telefono'];
    $Fecha =$_POST['Fecha'];
    $Aerolinea =$_POST['Aerolinea'];
    $Num_vuelo=$_POST['Num_vuelo'];
    $Categoria=$_POST['Categoria'];
    $Hora_salida=$_POST['Hora_salida'];
    $Hora_llegada=$_POST['Hora_llegada'];


    $insertar ="INSERT INTO agenciaviajes(Nombre, Edad, Correo, Telefono, Fecha, Aerolinea, Num_vuelo, Categoria, Hora_salida, Hora_llegada)
    VALUES ('$Nombre', '$Edad','$Correo', '$Telefono','$Fecha', '$Aerolinea', '$Num_vuelo', '$Categoria', '$Hora_salida', '$Hora_llegada')";


    $resultado =mysqli_query($conexion, $insertar);
    if (! $resultado) {
      die(mysqli_error($conexion));
    }else {

      echo '<br>Sus datos fueron guardados, nos pondremos en contacto con usted en breve, gracias por reservar su vuelo con nosotros <br>';
      echo "Nombre: $Nombre<br>";
      echo "Edad: $Edad<br>";
      echo "Correo: $Correo<br>";
      echo "Telefono: $Telefono<br>";
      echo "Fecha: $Fecha<br>";
      echo "Aerolinea: $Aerolinea<br>";
      echo "Numero de vuelo: $Num_vuelo<br>";
      echo "Categoria: $Categoria<br>";
      echo "Hora de salida: $Hora_salida<br>";
      echo "Hora de llegada: $Hora_llegada<br>";

    }
    mysqli_close($conexion);

     ?>
     <br>
     <a href="index.html" class="button">Regresar</a>

  </body>
</html>
