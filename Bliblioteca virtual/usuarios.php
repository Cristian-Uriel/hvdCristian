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
      $email=$_POST['email'];
      $pass=$_POST['psw'];
      $date=$_POST['fecha'];
      $user=$_POST['user'];

      $pws=md5($pass);

      $insertar="insert into usuarios(username,email,password,Fecha,rol) values('".$nom."','".$email."','".$pws."','".$date."','".$user."')";

      $resultado=mysqli_query($conexion,$insertar) or die (mysqli_error());
      echo '<SCRIPT> alert("Usuario registrado correctamente.")</SCRIPT>';
      include('sesion.html');
     ?>
  </body>
</html>
