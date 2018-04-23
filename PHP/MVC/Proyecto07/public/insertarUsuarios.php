<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear Usuaio</title>
    <link rel="stylesheet" type="text/css" href="insertarUsuarios.css">
  </head>
  <body>
    <h1>Crea tu usuario</h1>
    <h3>Formulario de registro</h3>
    <form action="insertarUsuarioBD.php" method="post" onsubmit="return comprobar()">
      <fieldset class="caja">
        <legend>¿QUIEN ERES?</legend>
        <p>Nombre <br>
        <input type="text" name="nombre" value="" placeholder="" id="nombre"></p>
        <p>Apellidos <br>
          <input type="text" name="apellidos" value="" placeholder="" id="apellidos"></p>
        <p>Curso <br>
          <input type="text" name="Curso" value="" placeholder="" id="curso"></p>
        <p>Edad <br>
        <input type="text" name="Edad" value="" placeholder="" id="edad"></p>
        <p>Puntuación <br>
        <input type="text" name="Puntuacion" value="" placeholder="" id="puntuacion"></p>
        <p>Correo electrónico <br>
        <input type="text" name="Correo" value="" placeholder="" id="correo"></p>
        <input type="submit" name="Enviar" value="Registrarse"></p>
      </fieldset>
    </form>
    <script type="text/javascript" src="validarInsercion.js"></script>
</body>
</html>
