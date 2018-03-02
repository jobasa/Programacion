<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuarios</title>
  </head>
  <body>
    <h1>USUARIO ELIMINADO CORRECTAMENTE</h1>
    <a href="listadoUsuarios.php">Ir al listado de usuarios.</a>
    <?php
    //Conectar con la base de datos
    $conector = new mysqli("localhost", "root", "", "juegos");

    if ($conector->connect_errno) {
       echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    //Recojer con GET la variable "codigo" de listadoUsuarios.php
    $usuarioBorrado=$_GET["codigo"];
    $resultado = $conector->query("DELETE FROM usuarios
                                  WHERE ID=".$usuarioBorrado);
     ?>

  </body>
</html>
