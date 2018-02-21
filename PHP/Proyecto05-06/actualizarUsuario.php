<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
 <body>

   <h1>ACTUALIZACION DE USUARIO</h1>
   <h3>Selecciona tu usuario</h3>
   <select name="Eligeusuario">
     <option selected="selected" value="Eligeusuario">Elige usuario</option>

     <?php

     $conector = new mysqli("localhost", "root", "", "juegos");

     if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
     }

     $resultado = $conector->query("SELECT ID,Nombre,Apellidos,Edad,Curso,Puntuacion FROM usuarios");

     while ($fila=$resultado->fetch_assoc()) {

        echo "<option>".$fila['Nombre']." ".$fila['Apellidos']."</option>";

     }

     echo "</select><br>";

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



      ?>
      </select>
   </body>
 </html>
