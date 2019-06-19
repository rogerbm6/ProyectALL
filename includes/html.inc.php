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
        <link type="image/png" href="images/primera.png" rel="icon" sizes="auto">
    </head>

    <body class="bg-primary">
    <div class="container-fluid">
      <div class="jumbotron border">
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <img src="images/logo/logo.png" alt="logo" class="img-fluid">
          </div>
          <div class="col-md-2 col-sm-12">
            <a class='btn btn-outline-light' href="admin/" type='button'>Iniciar sesion</a>
          </div>
        </div>

      </div>
      <nav>
        <div class="navbar navbar-expand-lg navbar-light ">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

          </button>
          <a class="navbar-brand text-light" href="index.php"><img src="images/nav.png" id="nav" alt="logo" class="img-rounded img-fluid"></a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=manjares">Manjares <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=picar">Picar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=tapas">Tapas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=ensaladas">Ensaladas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=vegetariano">Vegetariano</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=fuertes">Fuertes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=postres">Postres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?menu=bebidas">Bebidas</a>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" method='POST' enctype='multipart/form-data' action='index.php?menu=index'>
              <input type='hidden' name='buscar' value='busqueda' />
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search" name="palabra">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
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

            <div class="bg-dark ">
              <div class="container-fluid" id='foo'>
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <p class="lead">
                      Información y contacto
                    </p>
                    <ul>
                      <li>+34/622 899 210</li>
                      <li>+34/629 068 551</li>
                      <li>info@elcaminodejose.com</li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <p class="lead" id='foo'>
                      Dirección
                    </p>
                    <br>
                    <p class="lead">
                      Calle Risco Blanco, 79
                    </p>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <p class="lead" id='foo'>
                      Desarrollador
                    </p>
                    <ul>
                      <li>roggerbm6@gmail.com</li>
                      <li>+34 689 46 90 53</li>
                    </ul>
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
        <link type="image/png" href="../../images/primera.png" rel="icon" sizes="auto">
        <link type="text/css" href="../../disen/css/bootstrapvalidation.css">
    </head>

    <body class="bg-primary">
    <div class="container-fluid">
        <div class="jumbotron border">
          <div class="row">
            <div class="col-md-8 col-sm-12">
              <img src="../../images/logo/logo.png" alt="logo" class="img-fluid">
            </div>
            <div class="col-md-2 col-sm-12">
              <a class='btn btn-outline-light' href="logout.php" type='button'>Cerrar sesion</a>
            </div>
          </div>
        </div>
      <div class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <a class="navbar-brand text-light" href="index.php">Inicio</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?menu=comidas">Comidas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?menu=almacen">Almacen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?menu=empleados">Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?menu=pedidos">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?menu=reservas">Reservas</a>
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

          <div class="bg-dark ">
            <div class="container-fluid" id='foo'>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <p class="lead">
                    Información y contacto
                  </p>
                  <ul>
                    <li>+34/622 899 210</li>
                    <li>+34/629 068 551</li>
                    <li>info@elcaminodejose.com</li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                  <p class="lead" id='foo'>
                    Dirección
                  </p>
                  <br>
                  <p class="lead">
                    Calle Risco Blanco, 79
                  </p>
                </div>
                <div class="col-md-4 col-sm-12">
                  <p class="lead" id='foo'>
                    Desarrollador
                  </p>
                  <ul>
                    <li>roggerbm6@gmail.com</li>
                    <li>+34 689 46 90 53</li>
                  </ul>
                </div>

              </div>

            </div>
          </div>
        </footer>



        <script src="../../disen/js/jquery-3.4.1.min.js"></script>

        <script src="../../disen/js/popper.min.js"></script>

        <script src="../../disen/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="../../js/jqBootstrapValidation.js"></script>
        <script>
          $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
        </script>

    </body>

    </html>
<?php
}

?>
