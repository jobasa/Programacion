<?php
include 'DbUsuarios.php';

class Table
{
  //Generar el conector a la base de datos
  private $db;
  private $conector;

  function __construct()
  {
    $this->db=new DbUsuarios();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }

public function listarUsuarios()
{
  //Ejecuto una consulta en la base de datos
   $resultado = $this->conector->query("select *
      from usuarios
      ORDER BY Apellidos");

   return $resultado;
}


}

?>
