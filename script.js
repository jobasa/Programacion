var num=50;
console.log(num);
var pantalla=0;


while(pantalla!=num){
  pantalla=prompt("Introduce un numero");
  if(pantalla<num) {alert("Te has quedado corto");}
  else if (pantalla>num) {alert("Te has pasado");}
}
alert("Has acertado");
console.log("funciona");
