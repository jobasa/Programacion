
<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" type="text/css" href="insertarUsuarios.css">
  </head>
  <body>
    <h1 align="center">LISTADO DE LOS USUARIOS</h1>
    <table bgcolor="#00a5a5" width="70%" border="1px" align="center">

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
      "<th>".$fila['Correo']."</th>".
      "<th><a href="."actualizarUsuario2.php?codigo=".$fila['ID'].">Modificar</a></th>".
      "<th><a href="."borrarUsuario.php?codigo=".$fila['ID'].">Borrar</a></th>".
      "</tr>";
    }

     ?>

    </table>
    <!--Boton que lleva a la pagina de insertarUsuarios.php-->
    <form class="" action="insertarUsuarios.php" method="post">
    <center>
    <input  type='submit' name='crearUsuario' value='Crear usuario'>
  </center>
  </form>
  </body>
</html>
