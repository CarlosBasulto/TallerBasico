
<?php


define("PI", 3.1416);
echo PI;

//define("PI", 3.1416);

$if="Hola";


$Nombre="Carlos";

$nombre="Eduardo";

echo $Nombre;
echo $nombre;

//Indexado
$frutas=["limon", "pera"];
//Asociativo
$personas=["nombre" => "Juan", "edad"=>30];



class Persona 
{

public $nombre;
public $edad;

}


var_dump($personas);

$oNombre= new Persona();
$oNombre->nombre="Juan";
$oNombre->edad=30;

var_dump($oNombre);

echo "</br></br>";
//echo ;

echo $oNombre->nombre;
echo "</br></br>";
echo $oNombre->edad;
echo "</br></br>";

?>