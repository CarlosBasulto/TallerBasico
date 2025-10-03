<?php


/*

Define variables de distintos tipos: un entero, un flotante, una cadena y un booleano. Luego imprime el valor y tipo de cada variable utilizando la función var_dump().

Crea un array asociativo que contenga información de una persona (nombre, edad, ciudad).

Define una constante llamada NOMBRE_CURSO con el valor "Programación PHP" y muestra su valor en pantalla.

Crea una función que reciba un array de números y devuelva la suma de todos sus elementos. Llámala con un array de ejemplo y muestra el resultado.

Declara una variable con el valor null y utiliza la función is_null() para verificar si la variable tiene valor null.
*/

/*
$nombre="Carlos";
$apellido1="Basulto";
$apellido2="Pardo";
$edad=45;
$altura=1.79;
$soltero=false;

var_dump($nombre);

echo "</br></br>";
echo "</br></br>";
//Esto funcionará????
var_dump($nombre, $apellido1, $apellido2);
echo "</br></br>";
echo "</br></br>";

var_dump($edad);
echo "</br></br>";
echo "</br></br>";
var_dump($altura);
echo "</br></br>";
echo "</br></br>";
var_dump($soltero);


$aPersona=["nombre"=>"Carlos", "apellido1"=>"Basulto", "apellido2"=>"Pardo", "edad" =>45, "altura" =>1.79, "soltero"=> false ];
var_dump($aPersona);

define("NOMBRE_CURSO", "Curso de PHP");
echo NOMBRE_CURSO;


$tipoNUll=Null;

//is_null() 
if(is_null($tipoNUll))
{
    echo "es nulo";
}

*/

$numero1=5;
$numero2=6;
$resultado=$numero1+ $numero2;


$resultado= (5+3)*2;
//echo $resultado;

//echo "El resultado es $resultado , resultado";




  /*
  echo $a + $b; // Imprime 13echo "</br></br>";
echo "</br></br>";
  echo $a - $b; // Imprime 7echo "</br></br>";
echo "</br></br>";
  echo $a * $b; // Imprime 30echo "</br></br>";
echo "</br></br>";
  echo $a / $b; // Imprime 3.3333echo "</br></br>";
echo "</br></br>";
  echo $a % $b; // Imprime 1 (resto de la división)echo "</br></br>";
echo "</br></br>";
  echo $a ** $b; // Imprime 1000 (10 elevado a la potencia de 3)
*/

//$a+=5;
/*
$miNombre="Carlos";

$miNombre+=" Basulto Pardo";

echo $miNombre;
*/      


$miNombre="Carlos";
//$miNombre = $miNombre . " Basulto Pardo";
$miNombre.=" Basulto Pardo";

//echo $miNombre;


 


//echo $a==$b;
/*
if($a!=$b)
{
    echo "Es igual";
}else
echo "No es igual";

//var_dump($a, $b);


if($a===$b)
{
    echo "Es igual";
}else
echo "No es igual";

*/


 $a = 3.0;
  $b = 3;


$edad =18;


echo $esMayor;

$esMayorDeEdad = ($b >=18) ? true : false;



if($esMayor>=18)
{
echo "Es mayor de edad";

}else
echo "Es menor de edad";

$esMayor= ($edad >=18) ? "Mayor de edad" : "menor de edad";





echo $esMayorDeEdad;
var_dump ($esMayorDeEdad);

//echo "no es igual";





$x=5; 
echo "</br></br>";

echo ++$x;
echo "</br></br>";
echo $x;
echo "</br></br>";
echo $x++;
echo "</br></br>";
echo $x; 
echo "</br></br>";



?>