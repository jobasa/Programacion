<?php
$conector = new mysqli($server,$user, $password, $db);
if ($conector->connect_errno) {
echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
$consulta="SELECT * FROM country WHERE Region='South America'";
$resultado = $conector->query($consulta);
}
?>
