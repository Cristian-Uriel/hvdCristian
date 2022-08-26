<?php
  session_start();

  session_destroy();

  header("location: sesion_ad.html");
  exit();
 ?>
