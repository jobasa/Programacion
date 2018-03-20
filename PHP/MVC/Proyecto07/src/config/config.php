<?php
namespace Proyecto07\src\config;

/**
 *
 */
class config
{

  $config=[];
  $config["host"]="localhost";
  $config["user"]="root";
  $config["pass"]="";
  $config["db"]="juegos";

  function __construct()
  {
    echo "Clase config";
  }
}


 ?>
