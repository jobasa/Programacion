<?php
require_once __DIR__.'/../vendor/autoload.php';
require('../src/models/Table.php');
use Daw\table\Table as Table;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/insertarUsuarios.css">
  </head>
  <body>
    <h1><center>EL AHORCADO</center></h1>
    <br>

    <fieldset>
        <legend>ESCOJE UN USUARIO</legend>
        <form class="" action="ahorcado.php" method="post">
          <select class="" name="usuario">
            <option value=""> seleciona usuario</option>
            <?php
            //Crear objeto de la clase Table
            $resultado = new Table();

            // Ejecutar el método que realiza la consulta
            $conector = $resultado->listarUsuarios();

            //Recorremos todas las filas de la variable $resultado
            while ($fila=$conector->fetch_assoc()) {
              echo
              "<option name="."nombre"."value="."nombre".">".$fila['nombre']." ".$fila['apellidos']."</option>";
            }
             ?>
          </select><br>
          <input type="submit" name="empezar" value="Empezar">
        </form>
    </fieldset>

  </body>
</html>
