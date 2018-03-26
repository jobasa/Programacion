<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Se muestra solo las veces que se ha visitado index.php
    session_start();
    echo "El numero de veces visitadas es: ".$_SESSION['count'];


     ?>
  </body>
</html>
