<?php
require_once 'config.php';
require_once 'consultas.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <h1>Paises del mundo</h1>
 <?php
 if ($resultado->num_rows>0) {
   echo "<ul>";
   foreach ($resultado as $pais) {
     $paisNombre=$pais['Name'];
     $region=$pais['Region'];
     echo "<li>$paisNombre, $region</li>";
   }
   echo "</ul>";
 }
  ?>
  </body>
</html>
