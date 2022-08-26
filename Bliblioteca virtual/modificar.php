<?php
  include "conexion.php";

  $n_libro=$_GET['no'];

  $sentencia="select * from libros where id_libro='".$n_libro."'";
  $resultado= mysqli_query($conexion,$sentencia) or die (mysqli_error());
  $a = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="img/favicon.ico">
  </head>
  <body>
      <form class="formulario" action="actualiza_libro.php" method="post">
        <h4>Actualizar registro</h4>
        <input class="campos" type="number" name="no_lib"  value="<?php echo $a['id_libro'] ?>" readonly="readonly"><br>
        <input class="campos" type="text" name="nom"  value="<?php echo $a['nombre'] ?>"><br>
        <input class="campos" type="text" name="aut" value="<?php echo $a['autor'] ?>"><br>
        <textarea class="campos" type="text" name="desc" rows="5" cols="50"> <?php echo $a['descripcion'] ?> </textarea><br>
        <input class="campos" type="text" name="disp" value="<?php echo $a['disponible'] ?>"><br>
        <input class="campos" type="date" name="f_act" value="<?php echo $a['fecha_ingreso'] ?>"><br>
        <input class="boton" type="submit" value="Guardar">
      </form>
  </body>
  <footer>
    <div class="pie">
      <p>
      Todos los derechos reservados &copy Copyright <br>
      Biblioteca Virtual Garagoa 2020
      </p>
    </div>
  </footer>
</html>
