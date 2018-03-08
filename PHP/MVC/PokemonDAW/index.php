<?php
require "lib/Fuego/joanite.php";
require "lib/Fuego/pablmortar.php";
require "lib/Planta/juliowoodo.php";
require "lib/Planta/sergiopius.php";
$Fuego1= new joanite("Primer heroe Joanite");
$Planta1= new juliowoodo("Primer villano juliowoodo");
$Fuego2= new pablmortar("Segundo heroe Pablmortar");

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
    $Fuego1->restarVida(5);
    $Fuego1->danyar(5);
    echo "Daño sobre el primer pokemon: ".$Fuego1->getVida()." puntos de vida que le quedan.<br>";
    echo "Segundo pokemon tiene ".$Fuego2->getVida()." puntos de vida<br>";
    $Fuego2->restarVida(5);
    $Fuego2->danyar(5);
    echo "Daño por el segundo pokemon: ".$Fuego2->getVida()." puntos de vida que le quedan.";
    ?>
  </body>
</html>
