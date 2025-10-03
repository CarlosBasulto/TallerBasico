<?php
$oProducto=["nombre"=>"HP I6 Notebook", "precio"=>580, "url"=>"https://www.shutterstock.com/image-photo/kyiv-ukraine-fabruary-28th-2017-260nw-590283734.jpg", "stock" =>5, "descripcion" =>"Un super ordenador"];
$oProducto2=["nombre"=>"HP I7 Notebook", "precio"=>580, "url"=>"https://t4.ftcdn.net/jpg/04/18/67/61/360_F_418676136_6H7xsCDnUE400M3ncDWi0soBT7fCECIA.jpg", "stock" =>5, "descripcion" =>"Un super ordenador"];

$frutas=["naranja", "pera", "sandía"];


foreach ($frutas as $fruta)
{
  echo $fruta;
}


foreach ($oProducto as $p)
{
   echo $p;
}



//var_dump($oProducto);


$i=0;

while($i<=5)
{

  echo $i;
  $i++;


}



$b=0;
do{

echo $b;
$b++;

} while ($b<=5);




//$c=0;

for ($c=0; $c<5; $c++)
{

echo $c;

}






?>




<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficha de Producto</title>
  <!-- Bootstrap 5 CSS (sin integridad para evitar errores) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="card mb-3 shadow-sm">
      <div class="row g-0">
        <!-- Imagen del producto -->
        <div class="col-md-4">
          <img src="<?php echo $oProducto["url"]; ?>" class="img-fluid rounded-start" alt="Imagen del producto">
        </div>

        <!-- Información del producto -->
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $oProducto["nombre"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Precio: <?php echo $oProducto["precio"]; ?> €</h6>
            <p class="card-text"><?php echo $oProducto["descripcion"]; ?></p>
            <p class="card-text"><small class="text-success">Stock disponible: 12 unidades</small></p>
            <a href="#" class="btn btn-primary">Añadir al carrito</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="card mb-3 shadow-sm">
      <div class="row g-0">
        <!-- Imagen del producto -->
        <div class="col-md-4">
          <img src="<?php echo $oProducto2["url"]; ?>" class="img-fluid rounded-start" alt="Imagen del producto">
        </div>

        <!-- Información del producto -->
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $oProducto2["nombre"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Precio: <?php echo $oProducto2["precio"]; ?> €</h6>
            <p class="card-text"><?php echo $oProducto2["descripcion"]; ?></p>
            <p class="card-text"><small class="text-success">Stock disponible: 12 unidades</small></p>
            <a href="#" class="btn btn-primary">Añadir al carrito</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>







