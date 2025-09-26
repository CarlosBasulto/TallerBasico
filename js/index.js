//Permite crear comentarios--> Esto es código JS

document.writeln("Hola mundo en JavaScript");
document.getElementById("mensaje1").innerText = "Este es mi mensaje 1";
document.getElementById("mensaje2").innerText = "Este es mi mensaje 2";
document.getElementById("mensaje3").innerText = "Este es mi mensaje 3";

const MiFecha = new Date();
document.getElementById("fecha").innerText = MiFecha.toLocaleDateString();


//Funcion Saludar 
function Saludo() {
    alert("Hola Carlos, eres un crack!!!!!");
}

//Para deicr adios
function Adios() {
    alert("Adiossssssssssssssssssss");
}


var Numero1=56;
var Numero2=78;
const resultado= Numero1 + Numero2;

if(resultado > 75)
{
document.getElementById("resultado").innerText="El resultado de la operación es superior a 75";

  console.log("El resultado de la opracion es " + resultado);

}else if(resultado > 150)
{
document.getElementById("resultado").innerText="El resultado de la operación es superior a 150";

}
else
{

document.getElementById("resultado").innerText="El resultado de la operación es inferior a 75";

}



//Adios();
//Saludo();


