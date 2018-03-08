<?php
require_once "lib/pokemon.php";
/**
 *
 */
class pablmortar extends pokemon
{
  private $bolaFuego="";
  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(100);
  }
  public function getbolaFuego(){
    return $this->bolaFuego;
  }
  public function setbolaFuego($valor){
    $this->bolaFuego=$valor;
  }

  public function danyar($numeroVida)
  {
    parent::restarVida($numeroVida);
  }
}

 ?>
