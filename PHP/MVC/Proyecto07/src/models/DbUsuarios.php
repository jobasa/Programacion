<?php
require_once("../src/config/config.php");
/**
 * Plantilla vacia de Db
 */
class DbUsuarios
{
  //Propiedades de conexion
 private $server="";
 private $user="";
 private $pass="";
 private $dba="";

  //Propiedad conector
  private $conector;

  function __construct()
  {
    $this->server=Config::CFG_HOST;
    $this->user=Config::CFG_USER;
    $this->pass=Config::CFG_PASS;
    $this->dba=Config::CFG_DB;
  }

  //funcion para gestionar la conexion
   public function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->dba) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }

  }

  //Getters y setters
  public function getConector(){
    return $this->conector;
  }

    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    public function getDb()
    {
        return $this->dba;
    }

    public function setDb($dba)
    {
        $this->dba = $dba;
        return $this;
    }


}

?>
