<?php
require_once "../config/config.php";

/**
 *
 */
class Db
{
    //Propiedades de la conexion
    private $server="";
    private $user="";
    private $pass="";
    private $db="";

    //Propiedad conector
    private $conector;

  function __construct()
  {
    global $config;
    $this->server=$config["host"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->db=$config["db"];

  }

  function conectar(){
      $conectorTmp = new mysqli ($this->server,$this->user,
                                    $this->pass,$this->db) ;
      if ($conectorTmp->connect_errno) {
        $this->conector=false;
      }else{
        $this->conector=$conectorTmp;
      }
    }

  function getConector(){
    return $this->conector;
  }

}


 ?>
