<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises del mundo</title>
    <style>
      * {
        box-sizing: border-box;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }
      li {
          float: left;
      }
      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      li a:hover:not(.active) {
          background-color: #111;
      }
      .active {
          background-color: #4CAF50;
      }
      .column {
        float: left;
        padding: 10px;
        height: 30px;
      }
      .left {
        width: 25%;
      }
      .right {
        width: 75%;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
  </head>
  <body>
    <?php $pantalla="superficie";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="superficie") echo "active";?>" href="Act.7-PaisesDelMundo.php">Superficie</a></li>
      <li><a class="<?php if ($pantalla=="continente") echo "active";?>" href="Act.7.2-PaisesDelMundo.php">Continente</a></li>
      <li><a class="<?php if ($pantalla=="indep") echo "active";?>" href="Act.7.3-PaisesDelMundo.php">Año Indep</a></li>
    </ul>
    <?php
    $world=new mysqli("localhost","root","","world");
    if ($world->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $world->connect_error;
    } else {
      //interactuar con la base de datos
      echo "<h1>Paises del mundo</h1>";
      echo "<h3>Ordenados por la superficie:</h3>";
      echo "<div class='row'>";
      $resultado = $world->query("select Name,SurfaceArea from country order by SurfaceArea desc");
      foreach ($resultado as $fila) {
        echo "<div class='column left' style='background-color:#aaa;'>".
        $fila['Name']."</div>"."<div class='column right' style='background-color:#bbb;'>".
        $fila['SurfaceArea']."</div>"."<br>";
      }
      echo "</div>";
    }
    ?>
  </body>
</html>
