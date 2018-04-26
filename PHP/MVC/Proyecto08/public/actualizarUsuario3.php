<?php
//Para poder utilizar la clase Table
require_once("../src/models/Table.php");


//Recoger parametros del post
$id=$_POST["ID"];
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
  echo "EL CURSO NO ES ENTERO. USUARIO NO CREADO";
}elseif (!is_numeric($puntuacion)) {
  echo "LA PUNTUACION NO ES ENTERA. USUARIO NO CREADO";
}else {

  //creo la conexion con la base de datos
  $resultado= new Table();
//Consulta para actualizar el usuario
  $resultado->actualizarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo, $id);

echo "<h1>EL USUARIO HA SIDO ACTUALIZADO CORRECTAMENTE</h1>
<!--Link que lleva a la pagina de listadoUsuarios.php-->
<a href="."index.php".">Ir al index de usuarios.</a>";
}

 ?>
