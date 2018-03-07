<?php
require "lib/Fuego/joanite.php";
require "lib/Fuego/pablmortar.php";
require "lib/Planta/juliowoodo.php";
require "lib/Planta/sergiopius.php";
$Fuego1= new joanite("Primer heroe Joanite");
$Planta1= new juliowoodo("Primer villano juliowoodo");
$Fuego2= new pablmortar("Segundo heroe Pablomortar");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pokemons</title>
  </head>
  <body>
    <?php
    echo "Primer pokemon tiene ".$Fuego1->getVida()." puntos de vida<br>";
    echo "Segundo pokemon tiene ".$Fuego2->getVida()." puntos de vida<br>";
    ?>
  </body>
</html>
