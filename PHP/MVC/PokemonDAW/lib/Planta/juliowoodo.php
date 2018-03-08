<?php
require_once 'lib/pokemon.php';
/**
 *
 */
class juliowoodo extends pokemon
{
  private $latigoCepa="";
  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(50);
  }
  public function getlatigoCepa(){
    return $this->latigoCepa;
  }
  public function setlatigoCepa($valor){
    $this->latigoCepa=$valor;
  }

  public function danyar($numeroVida)
  {
    parent::restarVida($numeroVida);
  }
}

 ?>
