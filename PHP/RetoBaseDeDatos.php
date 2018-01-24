<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reto Bases De Datos</title>
  </head>
  <body>
    <h1>Paises de SudAmérica</h1>
    <?php
    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
  }else {

    	$resultado = $conector->query("SELECT Name,SurfaceArea
        FROM country
        WHERE Continent='South America'
        ORDER BY SurfaceArea DESC");
       echo "El numero de paises es: ".$resultado->num_rows."<br>";
   	$fila=$resultado->fetch_assoc();
     echo "Pais: ".$fila["Name"]."<br>";


  }


     ?>
  </body>
</html>
