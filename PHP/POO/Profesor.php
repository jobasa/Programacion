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
      $profesor1 = new ClassProfesor("Paco","Programacion");
      $profesor1->imprimeNombre();
      $profesor1->imprimeAsignatura();
      //echo '$profesor1';
      ?>
   </body>
 </html>
