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

        $clave=md5($pass);
        $consulta="Select count(*) as contar from usuarios where email='$correo' and password='$clave' and rol='Admin'";
        $ejec_consulta= mysqli_query($conexion,$consulta);
        $array=mysqli_fetch_array($ejec_consulta);


        if ($array['contar']>0) {
          header("location: Biblioteca_ad.php");
        }else {
          echo '<SCRIPT>alert("Datos incorrectos")</SCRIPT>';
          include('sesion_ad.html');
        }


       ?>

  </body>
</html>
