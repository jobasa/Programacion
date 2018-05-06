<?php
namespace Daw\ns1;
require('DbUsuarios.php');
use Daw\ns2 as AA;



class Table
{
  //Generar el conector a la base de datos
  private $db;
  public $conector;

  function __construct()
  {
    $this->db=new AA\DbUsuarios();
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


public function actualizarUsuario($nombre, $apellidos,$usuario,$contrasenya, $edad, $curso, $puntuacion, $correo, $id)
{
  $resultado = $this->conector->query("UPDATE usuarios
                                SET Nombre='$nombre',Apellidos='$apellidos',Usuario='$usuario',Contrasenya='$contrasenya',Edad='$edad',Curso='$curso',Puntuacion='$puntuacion',Correo='$correo'
                                WHERE ID='$id'");
}

public function borrarUsuario($usuarioBorrado)
{
  $resultado = $this->conector->query("DELETE FROM usuarios
                                WHERE ID=".$usuarioBorrado);
}

public function insertarUsuario($nombre, $apellidos,$usuario,$contrasenya, $edad, $curso, $puntuacion, $correo)
{
  $resultado = $this->conector->query("INSERT INTO usuarios(Nombre,Apellidos,Usuario,Contrasenya,Edad,Curso,Puntuacion,Correo)
                                VALUES ('$nombre', '$apellidos','$usuario','$contrasenya', '$edad', '$curso', '$puntuacion','$correo');");
}

}

?>
