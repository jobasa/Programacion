<?php
namespace Daw\sesion;
/**
 *
 */
class Sesion
{
  private $usuario="";
  private $puntuacion="";
  private $id="";

  function __construct()
  {
    session_start();
  }

  public function comprobar_sesion()
  {
    if(isset($_POST['usuario'])){ //Recibe el nombre por POST
      $_SESSION['usuario'] = $_POST['usuario']; //Asigna a la variable session el nombre
      $this->usuario=$_SESSION['usuario'];

    }else{//No recibe el parametro por POST y comprueba si la sessión esta abierta
      if(isset($_SESSION['usuario'])){
        $this->usuario=$_SESSION['usuario'];
      }else{
        $this->usuario="NO CONECTADO";
      }
    }
  }

  public function sesion_cerrada()
  {
    session_destroy();
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function comprobar_puntuacion()
  {
    //falta saber como pasar el id
    $puntuacion= $this->puntuacion->query("SELECT puntuacion
    FROM usuarios
    WHERE nombre=$id'";);
  }

}




 ?>
