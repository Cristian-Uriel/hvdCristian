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
            <li><a href="Biblioteca_ad">Biblioteca</a></li>
            <li><a href="salir_ad.php">Cerrar Sesion</a></li>
          </ul>
        </nav>
      </header>

      <?php
        include("conexion.php");
        session_start();
        echo "<div id = barra_sesion align=middle><marquee> <h4>Bienvenido al &aacute;rea de administradores.</h4></marquee>";

        $libros="select * from libros order by nombre asc";
       ?>
      <div id="contenedor">
        <table>
          <thead>
            <tr>
              <th>Foto</th>
              <th>Libro</th>
              <th>Descripci&oacute;n</th>
              <th>Fecha de ingreso</th>
              <th>Categor&iacute;a</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
            <?php
            $resultado=mysqli_query($conexion,$libros);

            while ($a = mysqli_fetch_assoc($resultado)) {
              echo "<tr>";
                echo '<td> <img src="';echo $a['foto']; echo'" height="100px" width="80px"></td>';
                echo "<td>"; echo $a['nombre']; echo "</td>";
                echo "<td>"; echo $a['descripcion']; echo "</td>";
                echo "<td>"; echo $a['fecha_ingreso']; echo "</td>";
                echo "<td>"; echo $a['tipo']; echo "</td>";
                echo "<td> <a href= 'modificar.php?no=".$a['id_libro']."'>Modificar</a> </td>";
                echo "<td> <a href= 'eliminar.php?no=".$a['id_libro']."'>Eliminar</a> </td>";
              echo "</tr>";
            }
            ?>
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
