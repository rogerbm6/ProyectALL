<?php
include("includes/html.inc.php");
include("includes/admindb.inc.php");
include("includes/contenido.inc.php");

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
    case "index":
    ?>

    <div class='jumbotron'>
      <h1 class='display-4' id="tit">¡Bienvenidos a nuestro rincón!</h1>
      <p class='lead'>Despues de recorrer un largo "camino" por tierras de la península ibérica, conociendo todos los secretos de nuestros
      mayores, tradición, cultura, empezamos un nuevo "camino" por tierras majoreras para mostrarles nuestra gastronomía tradicional combinada con un toque de vanguardia y así se lo queremos mostrar...</p>
      <br>
      <hr class='m-y-md'>
    </div>
    <div class='jumbotron bg-secondary'>
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/inicio/mesa.jpg" class="rounded mx-auto d-block">
                </div>
                <div class="carousel-item">
                  <img src="images/inicio/mesa.jpg" class="rounded mx-auto d-block">
                </div>
                <div class="carousel-item">
                  <img src="images/inicio/mesa.jpg" class="rounded mx-auto d-block">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">

          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.662409569493!2d-14.231231985088023!3d28.156760382607988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc479cf80eabb83f%3A0x2d28dea7a72761ac!2sCalle+Risco+Blanco%2C+79%2C+35627+Costa+Calma%2C+Las+Palmas!5e0!3m2!1ses!2ses!4v1560634644020!5m2!1ses!2ses" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>


    <?php

    buscar($conex);
    break;

    case "tapas":
    echo "
      <div class='jumbotron'>
        <h1 class='display-4' id='tit'>Pasión por el bocado</h1>
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
        <h1 class='display-4' id='tit'>Pequeños Manjares</h1>
        <hr class='m-y-md'>
      </div>
      ";
    manjares($conex);
    break;

    case "picar":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4' id='tit'>Nuestro rincón favorito</h1>
      <hr class='m-y-md'>
      <p class='lead'>Quesos de leche de cabra no pasteurizada</p>

    </div>";

    picar($conex);
    break;

    case "ensaladas":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4' id='tit'>Ensaladas frescas de la tierra</h1>
      <hr class='m-y-md'>
    </div>";

    ensaladas($conex);
    break;

    case "vegetariano":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4' id='tit'>El rincón vegetariano</h1>
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
      <h1 class='display-4' id='tit'>Carne, Mar y Más</h1>
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
      <h1 class='display-4' id='tit'>Al final</h1>
      <hr class='m-y-md'>
    </div>";

    postres($conex);
    break;

    case "bebidas":
    echo "
    <div class='jumbotron'>
      <h1 class='display-4' id='tit'>Refrescantes</h1>
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
