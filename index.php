<?php
include("includes/html.inc.php");
include("includes/admindb.inc.php");
include("includes/content.inc.php");

$conex = connectdb("caminodejose");

headere("Carta de Restaurante");

if(isset($_GET["menu"])){
    $menu=$_GET["menu"];
} else{
    $menu = "index";
}
?>

<section>

<?php
switch($menu){
    case "index":   // jejjeje
    echo "<h1 class='display-4'>Inicio</h1>";
    echo "<hr>";
    break;

    case "tapas":
    echo "
      <div class='jumbotron'>
        <h1 class='display-4'>Pasión por el bocado</h1>
        <p class='lead'>Las 'tapas'...</p>
        <br>
        <p class='lead'>...forman parte importante de la cultura gastronómica española. Son sencillas, rápidas y el mejor acompañamiento para un buen vino  </p>
        <hr class='m-y-md'>
      </div>
      ";
    tapas($conex);
    break;

    case "manjares":
    echo "
      <div class='jumbotron'>
        <h1 class='display-4'>Pequeños Manjares</h1>
        <hr class='m-y-md'>
      </div>
      ";
    manjares($conex);
    break;

    case "picar":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>Nuestro rincón favorito</h1>
      <hr class='m-y-md'>
      <p class='lead'>Quesos de leche de cabra no pasteurizada</p>

    </div>";

    picar($conex);
    break;

    case "ensaladas":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>Ensaladas frescas de la tierra</h1>
      <hr class='m-y-md'>
    </div>";

    ensaladas($conex);
    break;

    case "vegetariano":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>El rincón vegetariano</h1>
      <hr class='m-y-md'>
      <p class='lead'>Tenemos incorporado en este menú algunos platos vegetarianos.</p>
      <br>
      <p class='lead'>Tambien es posible pedir las diferentes guarniciones separadas!</p>
    </div>";

    vegetariano($conex);
    break;

    case "fuertes":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>Carne, Mar y Más</h1>
      <hr class='m-y-md'>
      <p class='lead'>Nosotros usamos exclusivamente liquido de oro español!. Es un coste que asumimos con gusto para darle una calidad excepcional al producto</p>
      <br>
    </div>";

    fuertes($conex);

    echo "
    <div class='jumbotron'>
      <p class='lead'>El 'Pescado local' de fuerteventura es una gran oportunidad para disfrutar de pescado fresco y sabroso</p>
      <br>
      <p class='lead'>Los 'Tomates' de nuestra bonita isla están considerados entre los más sabrosos de Europa y se utilizan también en muchos restaurantes de renombre del continente</p>
    </div>
    ";

    break;

    case "postres":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>Al final</h1>
      <hr class='m-y-md'>
    </div>";

    postres($conex);
    break;

    case "bebidas":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4'>Refrescantes</h1>
      <hr class='m-y-md'>
    </div>";

    bebidas($conex);
    break;



}
?>

</section>

<?php

footer();
?>
