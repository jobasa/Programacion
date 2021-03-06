<?php
require_once __DIR__.'/../vendor/autoload.php';
require('../src/models/Table.php');
use Daw\ns1\Table as Table;
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="ISO-8859-1">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/insertarUsuarios.css">
  </head>
  <body>
    <h1 align="center">LISTADO DE LOS USUARIOS</h1>
    <table bgcolor="#00a5a5" width="70%" border="1px" align="center">

    <tr align="center">
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Usuario</th>
      <th>contrasenya</th>
      <th>Edad</th>
      <th>Curso</th>
      <th>Puntuacion</th>
      <th>Correo</th>
    </tr>

    <?php


    //Crear objeto de la clase Table
    $resultado = new Table();


    // Ejecutar el método que realiza la consulta
    $conector = $resultado->listarUsuarios();

    //Recorremos todas las filas de la variable $resultado
    while ($fila=$conector->fetch_assoc()) {
      echo "<tr>".
      "<th>".$fila['id']."</th>".
      "<th>".$fila['nombre']."</th>".
      "<th>".$fila['apellidos']."</th>".
      "<th>".$fila['usuario']."</th>".
      "<th>".$fila['contrasenya']."</th>".
      "<th>".$fila['edad']."</th>".
      "<th>".$fila['curso']."</th>".
      "<th>".$fila['puntuacion']."</th>".
      "<th>".$fila['correo']."</th>".
      "<th><a href="."actualizarUsuario2.php?codigo=".$fila['id'].">Modificar</a></th>".
      "<th><a href="."borrarUsuario.php?codigo=".$fila['id'].">Borrar</a></th>".
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
