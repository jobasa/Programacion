<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizacion de usuario</title>
    <link rel="stylesheet" type="text/css" href="insertarUsuarios.css">
  </head>
 <body>

   <h1>ACTUALIZACION DE USUARIO</h1>


<form class="" action="actualizarUsuario3.php" method="post" onsubmit="return validar()">
<?php

$conector = new mysqli("localhost", "root", "", "juegos");

if ($conector->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}

// El parametro GET tiene valor.
if (isset($_GET["codigo"])&&!empty($_GET["codigo"])) {

  $usuarioActual=$_GET["codigo"];
  $resultado = $conector->query("SELECT ID,Nombre,Apellidos,Usuario,Contrasenya,Edad,Curso,Puntuacion,Correo FROM usuarios WHERE ID=".$usuarioActual);
  $fila=$resultado->fetch_assoc();

  echo "<h3>Actualiza tu usuario</h3>".

   "<fieldset class='caja'>".
   "<input type='hidden' name='ID' value=".$fila["ID"].">".
     "<p>Nombre <br>
     <input type='text' name='nombre' value=".$fila["Nombre"]." placeholder=''"."id='nombre'"."></p>
     <p>Apellidos <br>
       <input type='text' name='apellidos' value=".$fila["Apellidos"]." placeholder=''"."id='apellidos'"."></p>
    <p>Usuario <br>
        <input type='text' name='usuario' value=".$fila["Usuario"]." placeholder=''"."id='usuario'"."></p>
    <p>Contrasenya <br>
      <input type='text' name='contrasenya' value=".$fila["Contrasenya"]." placeholder=''"."id='contrasenya'"."></p>
     <p>Curso <br>
       <input type='text' name='Curso' value=".$fila["Curso"]." placeholder=''"."id='curso'"."></p>
     <p>Edad <br>
     <input type='text' name='Edad' value=".$fila["Edad"]." placeholder=''"."id='edad'"."></p>
     <p>Puntuación <br>
     <input type='text' name='Puntuacion' value=".$fila["Puntuacion"]." placeholder=''"."id='puntuacion'"."></p>
     <p>Correo electrónico <br>
     <input type='text' name='Correo' value=".$fila["Correo"]." placeholder=''"."id='correo'"."></p>
     <input type='submit' name='Enviar' value='Actualizar'></p>
   </fieldset>";

}

else {

 echo "<h3>Actualiza tu usuario</h3>".
 "<form action='listadoUsuarios.php' method='post'>".
   "<fieldset class='caja'>".
     "<p>Nombre <br>
     <input type='text' name='nombre' value='' placeholder=''></p>
     <p>Apellidos <br>
       <input type='text' name='apellidos' value='' placeholder=''></p>
     <p>Curso <br>
       <input type='text' name='Curso' value='' placeholder=''></p>
     <p>Edad <br>
     <input type='text' name='Edad' value='' placeholder=''></p>
     <p>Puntuación <br>
     <input type='text' name='Puntuacion' value='' placeholder=''></p>
     <p>Correo electrónico <br>
     <input type='text' name='Correo' value='' placeholder=''></p>
     <input type='submit' name='Enviar' value='Actualizar'></p>
   </fieldset>".
 "</form>";
}
 ?>
 <script type="text/javascript" src="validarActualizacion.js"></script>
</body>
</html>
