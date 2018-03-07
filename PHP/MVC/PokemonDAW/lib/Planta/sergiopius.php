<?php
require_once 'lib/pokemon.php';
/**
 *
 */
class sergiopius extends pokemon
{

  function __construct($nombre)
  {
    parent::setNombre("Soy sergiopius");
    parent::setVida(50);
  }
}

 ?>
