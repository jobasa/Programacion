<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Contador para ver cuantas veces se visita la pagina
    session_start();
    if (!isset($_SESSION['count'])) {
      $_SESSION['count'] = 0;
    } else {
      $_SESSION['count']++;
    }
    echo "El numero de veces visitadas es: ".$_SESSION['count'];

     ?>
     <br><a href="indexSegundo.php">Otra pagina</a>
     <br><a href="logout.php">Logout</a>
  </body>
</html>
