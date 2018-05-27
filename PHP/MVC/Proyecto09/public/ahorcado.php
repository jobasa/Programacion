<!DOCTYPE html>
<?php
require_once __DIR__.'/../vendor/autoload.php';
require('../src/models/Table.php');
use Daw\table\Table as Table;
$puntuacion = new Table();


require('../src/models/sesiones.php');
use Daw\sesion\Sesion as Sesion;
$nuevaSesion = new sesion(); //crea un objeto de la clase sesion
$x= $nuevaSesion->comprobar_sesion(); //llama al metodo del objeto

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Ahorcado</title>
    <style media="screen">
      body{
        background-color: #008080;
      }
      h1{
        border-bottom-style:inset;
        border-color: #000000 ;
        width: 300px;
      }
      div{
        font-size: 150%;
      }
    </style>
  </head>
  <body>
    <?php
    //Recoger la sessión
    $id= $nuevaSesion->getUsuario();



    //Recojer nombre,apellidos y puntuacion (de la clase Table)
    $y= $puntuacion->getPuntuacion($id);
    $fila=$y->fetch_assoc();
    if ($fila['nombre']=="admin") {
      header('Location: listadoUsuario.php');

    }



     ?>
    <h1 style="background-color: #008080">Bienvenido al ahorcado <?php echo $fila['nombre']." ".$fila['apellidos'].". Tu puntuacion es de: ".$fila['puntuacion'];  ?>, a jugar!</h1>
    <form id="formularioPrueba" action="#" method="post">
      <div><p id="dibujo" value=""></p></div>
      <div>Introduce una letra:<br>
      <input type="text"  size=4 id="entrada" value="">
     <input type="text" id="verificar" value="" readonly> </div>
      <div><p id="errores" value=""></p>
      <p id="intentos" value=""></p>
      <p id="resultado" value=""></p></div>
      <p><button type="button" name="Comprobar" onclick="comprobar()">Comprobar</button></p>
    </form>
      <a href="inicio.php">Log Out</a>
      <script type="text/javascript" src=js/Ahorcado.js></script>
  </body>
</html>
