var pantalla=prompt("Introducir un numero del 1 al 100");
while (pantalla<0 || pantalla>100 || isNaN(pantalla)==true) {
  pantalla=prompt("Escribir otro numero");
}
pantalla=parseInt (pantalla);
for (var i=0; i<=10; i++){
  var r=pantalla*i;
  console.log(pantalla+"x"+ i+"="+r);
}
