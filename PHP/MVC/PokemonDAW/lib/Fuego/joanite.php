<?php
require_once "lib/pokemon.php";
/**
 *
 */
class joanite extends pokemon
{

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(100);
  }
}

 ?>
