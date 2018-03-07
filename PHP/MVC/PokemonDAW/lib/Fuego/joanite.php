<?php
require_once "lib/pokemon.php";
/**
 *
 */
class joanite extends pokemon
{
  private $habilidad="";

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(100);
  }
  public function getHabilidad(){
    return $this->habilidad;
  }
  public function setHabilidad($valor){
    $this->habilidad=$valor;
  }

  public function danyar($numeroVida)
  {
    parent::restarVida($numeroVida);
  }


}

 ?>
