<?php
require_once ("../src/models/Table.php");
use Daw\table as TT;


//Recoger parametros del post
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$edad=$_POST["Edad"];
$curso=$_POST["Curso"];
$puntuacion=$_POST["Puntuacion"];
$correo=$_POST["Correo"];

//Comprobando si las variables son enteras
if (!is_numeric($edad)) {
  echo "LA EDAD NO ES ENTERA. USUARIO NO CREADO";

}elseif (!is_numeric($curso)) {
  echo "LA CURSO NO ES ENTERA. USUARIO NO CREADO";
}elseif (!is_numeric($puntuacion)) {
  echo "LA PUNTUACION NO ES ENTERA. USUARIO NO CREADO";
}else {

//creo la conexion con la base de datos
  $resultado= new TT\Table();
//insertar un usuario
  $resultado->insertarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo);


  echo "<h1>USUARIO CREADO CORRECTAMENTE</h1>
  <a href="."listadoUsuario.php".">Ir al index de usuarios.</a>";
}
 ?>
