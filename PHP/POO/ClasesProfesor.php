<?php

class ClassProfesor {
  private $nombre='Paco';
  private $asignatura='Programacion';

  public function __construct($nombre,$asignatura){
    $this->nombre=$nombre;
    $this->asignatura=$asignatura;
  }


  public function imprimeNombre(){
    echo $this->nombre;
  }


  public function imprimeAsignatura(){
    echo $this->asignatura;

  }
}

 ?>
