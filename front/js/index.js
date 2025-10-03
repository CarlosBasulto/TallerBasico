

//Linea

/*

Bloque

*/

//Permite crear comentarios--> Esto es código JS
/*
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

*/

//Adios();
//Saludo();


//Adios();

const PI = 3.14;
let nombre = "Carlos";
let apellido1 = "Basulto";
var apellido2 = "Pardo";


console.log(nombre);
console.log(apellido1);
console.log(apellido2);
console.log(PI);

//Concatenar con +
let saludo="Bienvenido,  " + nombre + ". Un saludo. Continuo escribiendo" + apellido1 + "shbfsdjkfhsdjkhfjskd";


let saludo2='Bienvenido, ' + nombre;
console.log(saludo);
console.log(saludo2);

console.log(`Hola ${nombre} , en cantado de saludarete ${apellido1} `);


let edad=45;
let temperatura=-6;
let decima=1.55;

let activo= true;

let noActivo=false;


milog(activo);



/*
let Edad= 15;

for (var i=0; i<5; i++ )
{

console.log(Edad=i);

}

console.log(Edad);*/

/*
let Edad=97;
 console.log(Edad);
Miedad(Edad);
function Miedad(Edad) {

  
  console.log(Edad);

  for (var i = 0; i < 5; i++) {

    console.log(Edad = i);

  }

  console.log(Edad);

}

 console.log(Edad);*/


let frutas=["manzana", "pera", "melocotones", "sandia"];
//milog(frutas);

milog(frutas[0]);
milog(frutas[2]);
milog(frutas[1]);


let alumno={

nombre:"Carlos", 
aplellido1:"Basulto", 
apellido2: "Pardo",
edad:45,
estudios: "Ingeniero Informático"

}

milog(alumno);

let alumno2={

nombre:"Carlos", 
aplellido1:"Basulto", 
apellido2: "Pardo",
edad:45,
estudios: "Ingeniero Informático"

}

milog(alumno2);


//saludarObjeto(alumno2);

//saludar(nombre,apellido1, apellido2);

//linea

/*

Multilinea

*/





let oPersona=new Persona("carlos");
oPersona.saludar();




document.writeln("Hola mundo");       

  document.getElementById("mensaje").innerText = "Bienvenido, " + nombre;

  document.querySelector("#mensaje").innerText="HOLA CARACOLA";


