<?php
//require_once __DIR__.'/../vendor/autoload.php';
require_once("..\src\models\Table.php");

?>
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
      include '../src/config/config.php';
    //conexion a la base de datos
    //mirar en esta pagina: http://php.net/manual/es/function.mysql-fetch-assoc.php
    //$conexion=mysql_connect("localhost", "root", "", "juegos");
    //Crear objeto de la clase Table
    $resultado = new Table();
    

    // Ejecutar el método que realiza la consulta
    $conector = $resultado->listarUsuarios();

    //Recorremos todas las filas de la variable $resultado
    while ($fila=$conector->fetch_assoc()) {
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
