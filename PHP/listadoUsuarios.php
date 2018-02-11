
<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <title></title>
  </head>
  <body>
    <h1 align="center">LISTADO DE LOS USUARIOS</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Edad</th>
      <th>Curso</th>
      <th>Puntuacion</th>
    </tr>

    <?php

    //Abro conexion con la base de datos
    $conector = new mysqli("localhost", "root", "", "juegos");
    if ($conector->connect_errno) {
       echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    //Recoger parametros del post
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["Edad"];
    $curso=$_POST["Curso"];
    $puntuacion=$_POST["Puntuacion"];

    //Insertar usuario
    $resultado = $conector->query("INSERT INTO usuarios(Nombre,Apellidos,Edad,Curso,Puntuacion)
                                VALUES ('$nombre', '$apellidos', '$edad', '$curso', '$puntuacion');");


    //Ejecuto una consulta en la base de datos
    $resultado = $conector->query("select *
    from usuarios
    ORDER BY Apellidos");
    //Muestra el numero de filas que hay en la tabla usuarios
    //echo "El numero de usuarios es: ".$resultado->num_rows."<br>";
    
    //Recorremos todas las filas de la variable $resultado
    while ($fila=$resultado->fetch_assoc()) {
      echo "<tr>".
      "<th>".$fila['ID']."</th>".
      "<th>".$fila['Nombre']."</th>".
      "<th>".$fila['Apellidos']."</th>".
      "<th>".$fila['Edad']."</th>".
      "<th>".$fila['Curso']."</th>".
      "<th>".$fila['Puntuacion']."</th>"."<br>".
      "</tr>";
    }

     ?>

    </table>
  </body>
</html>
