function comprobar(){
  if(intentos>cont && cero!=0){
  letra=entrada.value;
  entrada.value="";


    for (let i=0; i<=palabra.length-1; i++){
      if (letra == palabraAcertar[i]) {
        palabra[i]=letra;
        ver=true;
      }
    }

    if (ver==true){
      console.log(letra);
    }else{
      fallo=fallo+letra;
      errores.textContent=fallo;
      cont++;

      intento.textContent="Llevas "+cont+" intentos.";
    }
    ver=false;

    var j="";
    for (let i=0; i<=adivinar.length-1; i++){
      j=j+palabra[i];
    }
    verificar.value=j;
    cero=0;
    preguntar=false;
    for (let i=0; i<=adivinar.length-1; i++){
      if(palabra[i]=="-") cero=cero+1;
    }
  }else {
    if (cero==0) resultado.textContent="¡¡ENHORABUENA!! Has ganado!";
    else resultado.textContent="Has perdido. A la próxima lo harás mejor...  ";
  }
}
var numAl=Math.round(Math.random() * (4 - 0));
console.log(numAl);

var palabras=["joan", "daw", "porgramacion", "casa", "ordenador"]

var adivinar=palabras[numAl];
console.log(adivinar);

var intentos=9;
var cont=0;

var palabraAcertar=[];
for (let i=0; i<=adivinar.length-1;i++){
  palabraAcertar[i]=adivinar.charAt(i);
}

var palabra=[];
for (let i=0; i<=palabraAcertar.length-1;i++){
  palabra[i]="-";
}
var cero=6;
var ver=false;
var fallo="";

var entradaLetra=document.getElementById('entrada');
var letra ="";
var fallos=document.getElementById('errores');
var comprobante=document.getElementById('verificar');
var intentado=document.getElementById('intentos');
var resultado=document.getElementById('resultado');
