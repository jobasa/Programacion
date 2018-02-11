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
    <form action="listadoUsuarios.php" method="post">
      <fieldset class="caja">
        <legend>¿QUIEN ERES?</legend>
        <p>Nombre <br>
        <input type="text" name="nombre" value="" placeholder=""></p>
        <p>Apellidos <br>
          <input type="text" name="apellidos" value="" placeholder=""></p>
        <p>Curso <br>
          <input type="text" name="Curso" value="" placeholder=""></p>
        <p>Edad <br>
        <input type="text" name="Edad" value="" placeholder=""></p>
        <p>Puntuación <br>
        <input type="text" name="Puntuacion" value="" placeholder=""></p>
        <input type="submit" name="Enviar" value="Registrarse"> </p>
      </fieldset>
    </form>
