function comprobar(){
  var nombreCaja = document.getElementById('nombre');
  var apellidosCaja = document.getElementById('apellidos');
  var cursoCaja = document.getElementById('curso');
  var edadCaja = document.getElementById('edad');
  var puntuacionCaja = document.getElementById('puntuacion');
  var correoCaja = document.getElementById('correo');

  //Comprobaciones
  if(!nombreCaja.value){
    alert("El campo NOMBRE no tiene ningun valor");
    return false;
  }
  if(!apellidosCaja.value){
    alert("El campo APELLIDOS no tiene ningun valor");
    return false;
  }
  if (!cursoCaja.value) {
    alert("El campo CURSO no tiene ningun valor");
    return false;
  }
  if (!edadCaja.value) {
    alert("El campo EDAD no tiene ningun valor");
    return false;
  }
  if (!puntuacionCaja.value) {
    alert("El campo PUNTUACION no tiene ningun valor");
    return false;
  }
  if (!correoCaja.value) {
    alert("El campo CORREO no tiene ningun valor");
    return false;
  }
  if (edadCaja.value>100) {
    alert("La EDAD debe ser menor a 100 años");
    return false;
  }
  return true;
}
