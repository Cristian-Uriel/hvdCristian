<?php
  include "conexion.php";

  $numero=$_GET['no'];

  $sentencia="Delete from libros where id_libro='".$numero."'";
  $resultado=mysqli_query($conexion,$sentencia)or die(mysqli_error());

 ?>
 <script type="text/javascript">
  alert("Libro eliminado correctamente.");
  window.location.href='Biblioteca_ad.php';
 </script>
