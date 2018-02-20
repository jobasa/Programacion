
<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <title>Listado de usuarios</title>
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
      <th>Correo</th>
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
    $correo=$_POST["Correo"];

    //Insertar usuario
    $resultado = $conector->query("INSERT INTO usuarios(Nombre,Apellidos,Edad,Curso,Puntuacion,Correo)
                                VALUES ('$nombre', '$apellidos', '$edad', '$curso', '$puntuacion','$correo');");


    //Ejecuto una consulta en la base de datos
    $resultado = $conector->query("select *
    from usuarios
    ORDER BY Apellidos");

    //Recorremos todas las filas de la variable $resultado
    while ($fila=$resultado->fetch_assoc()) {
      echo "<tr>".
      "<th>".$fila['ID']."</th>".
      "<th>".$fila['Nombre']."</th>".
      "<th>".$fila['Apellidos']."</th>".
      "<th>".$fila['Edad']."</th>".
      "<th>".$fila['Curso']."</th>".
      "<th>".$fila['Puntuacion']."</th>".
      "<th>".$fila['Correo']."</th>"."<br>".
      "</tr>";
    }

     ?>

    </table>
  </body>
</html>
