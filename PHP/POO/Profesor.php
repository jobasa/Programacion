<?php
include 'ClasesProfesor.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Profesor</title>
   </head>
   <body>
     <?php
      $profesor1 = new ClaseProfesor();
      $profesor1->mostrarNombre();
      $profesor1->getAsignatura();
      echo "$profesor1";
      ?>
   </body>
 </html>
