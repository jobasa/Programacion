<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuarios</title>
  </head>
  <body>
    <h1>USUARIO ELIMINADO CORRECTAMENTE</h1>
    <a href="index.php" style="color:#000000">Ir al index de usuarios.</a>
    <?php
    require_once("../src/models/Table.php");
    use Daw\table\Table as Table;

    //Recojer con GET la variable "codigo" de listadoUsuarios.php
    $usuarioBorrado=$_GET["codigo"];

    //creo la conexion con la base de datos
    $resultado= new Table();
    $resultado->borrarUsuario($usuarioBorrado)
     ?>

  </body>
</html>
