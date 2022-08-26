<?php
  include "conexion.php";

  $num=$_POST['no_lib'];
  $nombre=$_POST['nom'];
  $autor=$_POST['aut'];
  $descripcion=$_POST['desc'];
  $disponible=$_POST['disp'];
  $fecha=$_POST['f_act'];

  $actualiza="update libros set nombre = '$nombre', autor = '$autor', descripcion = '$descripcion', disponible = '$disponible', fecha_ingreso = '$fecha' where id_libro = ".$num;
  $resultado=mysqli_query($conexion,$actualiza) or die(mysqli_error());

 ?>
<script type="text/javascript">
  alert ("Libro actualizado correctamente");
  window.location.href='Biblioteca_ad.php';
</script>
