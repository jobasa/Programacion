<?php
require_once "Db.php";

class Table
{
  //Generar el conector a la base de datos
  private $db;
  private $conector;

  function __construct()
  {
    $this->db=new Db();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }

public function listarUsuarios()
{
  //Ejecuto una consulta en la base de datos
   $resultado = $conector->query("select *
      from usuarios
      ORDER BY Apellidos");

   return $resultado;
}


}

?>
