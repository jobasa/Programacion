<?php
$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
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
  echo "LA CURSO NO ES ENTERA. USUARIO NO CREADO";
}elseif (!is_numeric($puntuacion)) {
  echo "LA PUNTUACION NO ES ENTERA. USUARIO NO CREADO";
}else {
//Consulta para actualizar el usuario
  $resultado = $conector->query("UPDATE usuarios
                                SET Nombre='$nombre',Apellidos='$apellidos',Edad='$edad',Curso='$curso',Puntuacion='$puntuacion',Correo='$correo'
                                WHERE ID='$id'");
echo "<h1>EL USUARIO HA SIDO ACTUALIZADO CORRECTAMENTE</h1>
<!--Link que lleva a la pagina de listadoUsuarios.php-->
<a href="."listadoUsuarios.php".">Ir al listado de usuarios.</a>";
}

 ?>
