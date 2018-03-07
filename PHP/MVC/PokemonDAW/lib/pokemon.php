<?php
/**
 *
 */
class pokemon
{
  //Vida
  private $vida=100;
  private $nombre="";
  function __construct()
  {

  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
  }
  public function getVida(){
    return $this->vida;
  }
  //Getters y setters de Nombre
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  //Restar vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}



 ?>
