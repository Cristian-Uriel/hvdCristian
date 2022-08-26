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

        $correo=$_POST['email'];
        $pass=$_POST['psw'];
        $pass2=$_POST['psw2'];

        $clave=md5($pass);
        $clave2=md5($pass2);
        $consulta="Select count(*) as contar from usuarios where email='$correo'";
        $ejec_consulta= mysqli_query($conexion,$consulta);
        $array=mysqli_fetch_array($ejec_consulta);


        if ($clave==$clave2) {
          $actualizar="update usuarios set password='$clave' where email='$correo'";
          $ejec_act= mysqli_query($conexion,$actualizar);
          if ($array['contar']>0) {
            echo '<SCRIPT>alert("Contraseña actualizada correctamente.")</SCRIPT>';
            include("sesion.html");
          }else {
            echo '<SCRIPT>alert("Datos incorrectos")</SCRIPT>';
            include('actualizar.php');
          }
        }else {
          echo '<SCRIPT>alert("Las contraseñas no coinciden")</SCRIPT>';
          include('actualizar.php');
        }

       ?>

  </body>
</html>
