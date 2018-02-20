<?php

class ClaseProfesor {
  public $nombre='Paco';
  public $asignatura='Programacion';

  public function mostrarNombre(){
    return $this->nombre;
  }
  public function getAsignatura(){
    return $this->asignatura;
    echo '<br>';
    echo 'la asignatura que imparte es: ';
    echo $this->asignatura;
    echo '<br>';
  }
}

 ?>
