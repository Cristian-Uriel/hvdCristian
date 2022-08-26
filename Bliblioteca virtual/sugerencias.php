<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      require 'conexion.php';
      session_start();

      $nom=$_POST['nombre'];
      $email=$_POST['correo'];
      $asunto=$_POST['titulo'];
      $msg=$_POST['mensaje'];
      $date=$_POST['fecha'];

      $insertar="insert into comentarios(remitente,correo,asunto,mensaje,fecha) values('".$nom."','".$email."','".$asunto."','".$msg."','".$date."')";

      $resultado=mysqli_query($conexion,$insertar) or die (mysqli_error());
      echo '<SCRIPT> alert("Gracias por su sugerencia.")</SCRIPT>';
      include('Quienes_somos.html');
     ?>


  </body>
</html>
