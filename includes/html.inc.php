<?php

function headere($titulo)
{
    ?>
    <!doctype html>
    <html>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php echo $titulo; ?>
        </title>
        <link type="text/css" href="disen/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="disen/css/disenio.css" rel="stylesheet">
    </head>

    <body class="bg-primary">
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 class="display-1">El camino de Jose</h1>
      </div>
      <nav>
        <div class="navbar navbar-expand-lg navbar-light ">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

          </button>
          <a class="navbar-brand" href="index.php">Inicio</a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=manjares">Manjares <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=picar">Picar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=tapas">Tapas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=ensaladas">Ensaladas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=vegetariano">Vegetariano</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=fuertes">Fuertes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=postres">Postres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=bebidas">Bebidas</a>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>

          </div>

        </div>

      </nav>
    </div>

    <div class="container bg-primary">



    <?php
}

function footer()
{
    ?>
        </div>

          <footer>

            <div class="bg-dark navbar navbar-fixed-bottom pt-5">
              <div class="container">
                <div class="row">
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>

                </div>

              </div>
            </div>
          </footer>




        <script src="disen/js/jquery-3.4.1.min.js"></script>
        <script src="disen/js/popper.min.js"></script>
        <script src="disen/js/bootstrap.min.js"></script>

    </body>

    </html>
<?php
}

function headerlogin($titulo)
{
    ?>
    <!doctype html>
    <html>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php echo $titulo; ?>
        </title>
        <link type="text/css" href="../../disen/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../../disen/css/disenio.css" rel="stylesheet">
    </head>

    <body class="bg-primary">
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 class="display-1">El camino de Jose</h1>
      </div>
      <div class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <a class="navbar-brand" href="index.php">Inicio</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=comidas">Comidas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=almacen">Almacen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=empleados">Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=pedidos">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=reservas">Reservas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?menu=proveedores">Proveedores</a>
            </li>


          </ul>

        </div>

      </div>


    </div>
    <div class="container bg-primary">



    <?php
}

function footerlogin()
{
    ?>
        </div>

          <footer>

            <div class="bg-dark navbar navbar-fixed-bottom pt-5">
              <div class="container">
                <div class="row">
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>
                  <div class="col-4">
                    <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Integer posuere erat a ante.
                    </p>
                  </div>

                </div>

              </div>
            </div>
          </footer>




        <script src="../../disen/js/jquery-3.4.1.min.js"></script>
        <script src="../../disen/js/popper.min.js"></script>
        <script src="../../disen/js/bootstrap.min.js"></script>

    </body>

    </html>
<?php
}

?>
