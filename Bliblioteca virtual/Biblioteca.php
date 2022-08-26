<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="img/favicon.ico">
  </head>
  <body>
      <header>
        <nav class="navegacion">
          <ul class="menu">
            <img class="logo" src="img/logo.jpg" alt="logo">
            <li><a href="#">Inicio</a></li>
            <li><a href="Biblioteca.php">Biblioteca</a></li>
            <li><a href="sesion_ad.html">Administrador</a></li>
            <li><a href="salir.php">Cerrar Sesion</a></li>
          </ul>
        </nav>
      </header>

      <?php
        include("conexion.php");
        session_start();
        echo "<div id = barra_sesion align=middle><marquee> <h4>Bienvenido, Disfruta de los libros virtuales que tenemos para ti...        Te deseamos un buen recorrido por la plataforma.      Gracias.</h4></marquee>";

        $libros="select * from libros order by nombre asc";
       ?>
      <div id="contenedor">
        <table>
          <thead>
            <tr>
              <th>Foto</th>
              <th>Libro</th>
              <th>Descripci&oacute;n</th>
              <th>Disponible</th>
              <th>Fecha de ingreso</th>
              <th>Categoria</th>
              <th>Visualiza</th>
            </tr>
          </thead>

            <?php
            $resultado=mysqli_query($conexion,$libros);

            while ($a = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>
                <td><img src="<?php echo $a["foto"];?>" height="100px" width="80px"></td>
                <td><?php echo $a["nombre"]; ?></td>
                <td><?php echo $a["descripcion"]; ?></td>
                <td><?php echo $a["disponible"]; ?></td>
                <td><?php echo $a["fecha_ingreso"]; ?></td>
                <td><?php echo $a["tipo"]; ?></td>
                <td><a href="<?php echo $a["url_descarga"]?>" target="_blank">Ver mas..</a></td>
              </tr>
          <?php } ?>
        </table>
      </div>
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
