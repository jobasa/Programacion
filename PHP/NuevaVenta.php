<?php
$conector = new mysqli("localhost",
   "root", "", "tienda");
   if ($conector->connect_errno) {
     echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
   }else{
     if(empty($_POST["fecha"])) echo "Vacio";
     $fecha=$_POST["fecha"];

     $consulta="SELECT *
       FROM ventas
       WHERE fecha= NOW();";
     echo "<br>";
     echo $consulta;
     $resultado = $conector->query($consulta);
       foreach ($resultado as $fila) {
         echo "<br>El pais buscado es:".$fila["Name"];
       }
   }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
    <select class="" name="">
      <?php foreach ($resultadoVentas as $fila):?>
        <option value="<?=$fila["continent"]?>"><?=$fila["continent"]?></option>
      <?php endforeach; ?>
    </select>
  </form>
  </body>
</html>
