<?php
include 'DbUsuarios.php';

class Table
{
  //Generar el conector a la base de datos
  private $db;
  public $conector;

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


public function actualizarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo, $id)
{
  $resultado = $this->conector->query("UPDATE usuarios
                                SET Nombre='$nombre',Apellidos='$apellidos',Edad='$edad',Curso='$curso',Puntuacion='$puntuacion',Correo='$correo'
                                WHERE ID='$id'");
}

public function borrarUsuario($usuarioBorrado)
{
  $resultado = $this->conector->query("DELETE FROM usuarios
                                WHERE ID=".$usuarioBorrado);
}

public function insertarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo)
{
  $resultado = $this->conector->query("INSERT INTO usuarios(Nombre,Apellidos,Edad,Curso,Puntuacion,Correo)
                                VALUES ('$nombre', '$apellidos', '$edad', '$curso', '$puntuacion','$correo');");
}

}

?>
