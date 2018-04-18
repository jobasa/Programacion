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

//Comprobando si las variables son enteras
if (!is_numeric($edad)) {
  echo "LA EDAD NO ES ENTERA. USUARIO NO CREADO";

}elseif (!is_numeric($curso)) {
  echo "LA CURSO NO ES ENTERA. USUARIO NO CREADO";
}elseif (!is_numeric($puntuacion)) {
  echo "LA PUNTUACION NO ES ENTERA. USUARIO NO CREADO";
}else {

  //Insertar usuario
  $resultado = $conector->query("INSERT INTO usuarios(Nombre,Apellidos,Edad,Curso,Puntuacion,Correo)
                                VALUES ('$nombre', '$apellidos', '$edad', '$curso', '$puntuacion','$correo');");

  echo "<h1>USUARIO CREADO CORRECTAMENTE</h1>
  <a href="."listadoUsuarios.php".">Ir al listado de usuarios.</a>";
}
 ?>
