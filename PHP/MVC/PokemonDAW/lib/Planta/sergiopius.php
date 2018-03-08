<?php
require_once 'lib/pokemon.php';
/**
 *
 */
class sergiopius extends pokemon
{
  private $rayoSolar="";
  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(50);
  }
  public function getrayoSolar(){
    return $this->rayoSolar;
  }
  public function setrayoSolar($valor){
    $this->rayoSolar=$valor;
  }

  public function danyar($numeroVida)
  {
    parent::restarVida($numeroVida);
  }
}

 ?>
