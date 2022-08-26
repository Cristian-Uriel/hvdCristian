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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Biblioteca</a>
              <ul class="submenu">
                <li><a href="Registrese.html">Registrese</a></li>
                <li><a href="sesion.html">Iniciar Sesi&oacute;n</a></li>
              </ul>
            </li>
            <li><a href="Quienes_somos.html">Quienes somos</a>
            </li>
          </ul>
        </nav>
      </header>
      <form class="formulario" action="act_cont.php" method="post">
        <h4>Inicio de Sesi&oacute;n</h4>
        <input class="campos" type="text" name="email"  placeholder="Ingrese su correo electr&oacute;nico" value="" required><br>
        <input class="campos" type="password" name="psw" placeholder="Ingrese una nueva contraseña" value="" required><br>
        <input class="campos" type="password" name="psw2" placeholder="Confirme su nueva contraseña" value="" required><br>
        <input class="boton" type="submit" value="Actualizar">
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
