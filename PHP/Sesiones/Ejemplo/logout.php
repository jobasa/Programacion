<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //borrar datos
    session_start();
    $_SESSION=[];
    session_destroy();
     ?>
     <a href="indexSegundo.php">Otra pagina</a>
  </body>
</html>
