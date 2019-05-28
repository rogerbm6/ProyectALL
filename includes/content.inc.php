<?php
function manjares($con){

    $comidas_pequenos = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='pequenos'");

while($registro = mysqli_fetch_array($comidas_pequenos)){


  echo "
  <div class='jumbotron bg-secondary'>
  <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
  <p class='lead'>".$registro["descripcion"]."</p>
  <p class='lead'>".$registro["precio"]." &euro;</p>
  <hr>
  </div>";
    }
}


    function tapas($con){

        $comidas_tapas = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='tapas'");

		while($registro = mysqli_fetch_array($comidas_tapas)){


			echo "
      <div class='jumbotron bg-secondary'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
  			<p class='lead'>".$registro["descripcion"]."</p>
  			<p class='lead'>".$registro["precio"]." &euro;</p>
  			<hr>
      </div>";
        }
    }

    function picar($con){

        $comidas_jamques = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='jamques'");

    while($registro = mysqli_fetch_array($comidas_jamques)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
      <p class='lead'>".$registro["descripcion"]."</p>
      <p class='lead'>".$registro["precio"]." &euro;</p>
      <hr>
      </div>";
        }
    }



    function ensaladas($con){

        $comidas_ensalada = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='ensalada'");

    while($registro = mysqli_fetch_array($comidas_ensalada)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
      <p class='lead'>".$registro["descripcion"]."</p>
      <p class='lead'>".$registro["precio"]." &euro;</p>
      <hr>
      </div>";
        }
    }

    function vegetariano($con){

        $comidas_vegetariano = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='vegetariano'");

    while($registro = mysqli_fetch_array($comidas_vegetariano)){


      echo "
      <div class='jumbotron bg-secondary'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
        <p class='lead'>".$registro["descripcion"]."</p>
        <p class='lead'>".$registro["precio"]." &euro;</p>
        <hr>
      </div>";
        }
    }


    function fuertes($con){

        $comidas_carne_pas_pes = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='carne' OR tipo='pescado' OR tipo='pasta'");

    while($registro = mysqli_fetch_array($comidas_carne_pas_pes)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
      <p class='lead'>".$registro["descripcion"]."</p>
      <p class='lead'>".$registro["precio"]." &euro;</p>
      <hr>
      </div>";
        }
    }


    function postres($con){

        $comidas_postres = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='postres'");

    while($registro = mysqli_fetch_array($comidas_postres)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
      <p class='lead'>".$registro["descripcion"]."</p>
      <p class='lead'>".$registro["precio"]." &euro;</p>
      <hr>
      </div>";
        }
    }

    function bebidas($con){

        $comidas_bebidas = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='bebidas'");
        $almacen_refresco= mysqli_query($con,"SELECT * FROM almacen WHERE categoria='refrescos'");
        $almacen_licor= mysqli_query($con,"SELECT * FROM almacen WHERE categoria='licores'");

     while($almacen = mysqli_fetch_array($almacen_refresco)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$almacen["nombre"]."</h1>
      <p class='lead'>".$almacen["descripcion"]."</p>
      <p class='lead'>".$almacen["precio"]." &euro;</p>
      <hr>
      </div>";
            }


    while($registro = mysqli_fetch_array($comidas_bebidas)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
      <p class='lead'>".$registro["descripcion"]."</p>
      <p class='lead'>".$registro["precio"]." &euro;</p>
      <hr>
      </div>";
        }

      while($licores = mysqli_fetch_array($almacen_licor)){


      echo "
      <div class='jumbotron bg-secondary'>
      <h1 class='display-4' style='background-color: #d8a3b0;'>".$licores["nombre"]."</h1>
      <h1>".$licores["categoria"]."
      <p class='lead'>".$licores["descripcion"]."</p>
      <p class='lead'>".$licores["precio"]." &euro;</p>
      <hr>
      </div>";
      }
    }

    function admin_comida($con){

        $comidas = mysqli_query($con,"SELECT * FROM comidas");


    while($registro = mysqli_fetch_array($comidas)){
      $ident = "a".$registro["idComida"];
      echo "
      <div class='jumbotron bg-secondary'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
        <h1>".$registro["tipo"]."</h1>
        <p class='lead'>".$registro["descripcion"]."</p>
        <p class='lead'>".$registro["precio"]." &euro;</p>
        <p class='lead'>".$registro["alergenos"]."</p>
        <hr>
        <a href='index.php?accion=borrar&idComida=".$registro["idComida"]."' class='btn btn-danger'>Borrar</a>


        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar plato</button>
        <div class='collapse' id='".$ident."'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=comidas'>
              <input type='hidden' name='accion' value='actualizar' />
              <input type='hidden' name='idComida' value='".$registro["idComida"]."'/>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <label class='input-group-text' for='tipo'>Tipos</label>
                </div>
                <select class='custom-select' name='tipo'>
                  <option selected value=".$registro["tipo"].">Elige...</option>
                  <option value='pescado'>Pescado</option>
                  <option value='carne'>Carne</option>
                  <option value='pasta'>Pasta</option>
                  <option value='ensalada'>Ensalada</option>
                  <option value='vegetariano'>Vegetariano</option>
                  <option value='tapas'>Tapas</option>
                  <option value='jamques'>Jamon o queso</option>
                  <option value='pequenos'>Entradas</option>
                  <option value='postres'>Postres</option>
                  <option value='bebidas'>Bebidas</option>
                </select>
              </div>
              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre' value=".$registro["nombre"].">
              </div>

              <div class='input-group'>
                <div class='input-group-prepend'>
                  <span class='input-group-text'>Descripcion</span>
                </div>
                <textarea class='form-control' aria-label='With textarea' name='descripcion' value=".$registro["descripcion"]." >".$registro["descripcion"]."</textarea>
              </div>
              <br>
              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Precio</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='precio' value=".$registro["precio"].">
              </div>

              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>



      </div>";

        }
        mysqli_free_result($comidas);
    }

    function admin_almacen($con){

        $comidas = mysqli_query($con,"SELECT * FROM almacen");

    while($registro = mysqli_fetch_array($comidas)){
      $ident = "a".$registro["idAlmacen"];
      echo "
      <div class='jumbotron bg-secondary'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
        <h1>".$registro["stock"]."</h1>
        <p class='lead'>".$registro["tipoStock"]."</p>
        <p class='lead'>".$registro["categoria"]."</p>
        <p class='lead'>".$registro["descripcion"]."</p>
        <p class='lead'>".$registro["precio"]." &euro;</p>

        <hr>

        <a href='index.php?menu=almacen&accion=borraralm&idAlmacen=".$registro["idAlmacen"]."' class='btn btn-danger'>Borrar</a>


        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar plato</button>
        <div class='collapse' id='".$ident."'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=almacen'>
              <input type='hidden' name='accion' value='actualizaralm' />
              <input type='hidden' name='idAlmacen' value='".$registro["idAlmacen"]."'/>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre' value=".$registro["nombre"].">
              </div>
              <div class='input-group'>
                <div class='input-group-prepend'>
                  <span class='input-group-text'>Descripcion</span>
                </div>
                <textarea class='form-control' aria-label='With textarea' name=".$registro["descripcion"].">".$registro["descripcion"]."</textarea>
              </div>
              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <label class='input-group-text' for='tipoStock'>Tipos</label>
                </div>
                <select class='custom-select' name='tipoStock'>
                  <option selected value=".$registro["tipoStock"].">Elige...</option>
                  <option value='pieza'>Pieza</option>
                  <option value='lata'>Lata</option>
                  <option value='botella'>Botella</option>
                  <option value='kg'>KiloGramos</option>
                </select>
              </div>
              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <label class='input-group-text' for='categoria'>Categoria</label>
                </div>
                <select class='custom-select' name='categoria'>
                  <option selected value=".$registro["categoria"].">Elige...</option>
                  <option value='carne'>Carne</option>
                  <option value='pollo'>Pollo</option>
                  <option value='pescado'>Pescado</option>
                  <option value='lacteo'>Lacteos</option>
                  <option value='paquetes'>Paquete</option>
                  <option value='refrescos'>Refrescos</option>
                  <option value='licores'>Licores</option>
                  <option value='otros'>Otros</option>
                </select>
              </div>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Cantidad</span>
                </div>
                <input type='number' class='form-control' name='stock' value=".$registro["stock"].">
              </div>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Precio</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='precio' value=".$registro["precio"].">
              </div>

              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>




      </div>";
        }
    }


    function accion($con){
      if(isset($_REQUEST["accion"])){
        $crud=$_REQUEST["accion"];

        if ($crud == "insertar") {

          $query =  "insert into comidas(tipo, nombre, descripcion, precio) values('".$_POST["tipo"]."', '".$_POST["nombre"]."','".$_POST["descripcion"]."' , '".$_POST["precio"]."' )";

          mysqli_query($con, $query);

          header("Location:index.php?menu=comidas");

        }

        if ($crud == "borrar") {

          mysqli_query($con, "delete from comidas where idComida = ".$_GET["idComida"]." ;");

          header("Location:index.php?menu=comidas");

        }

        if ($crud == "actualizar") {

          mysqli_query($con, "update comidas set tipo = '".trim($_POST["tipo"])."', nombre= '".trim($_POST["nombre"])."', descripcion = '".trim($_POST["descripcion"])."', precio = ".$_POST["precio"]." where idComida = ".$_POST["idComida"]."");

          header("Location:index.php?menu=comidas");

        }

        if ($crud == "insertaralm") {

          $query =  "insert into almacen(stock, tipoStock, categoria, descripcion, nombre, precio) values(".$_POST["stock"].", '".$_POST["tipoStock"]."','".$_POST["categoria"]."' , '".$_POST["descripcion"]."' ,'".$_POST["nombre"]."',".$_POST["precio"]." )";


          mysqli_query($con, $query);

          header("Location:index.php?menu=almacen");

        }

        if ($crud == "borraralm") {

          mysqli_query($con, "delete from almacen where idAlmacen = ".$_GET["idAlmacen"]." ;");

          header("Location:index.php?menu=almacen");

        }

        if ($crud == "actualizaralm") {

          mysqli_query($con, "update almacen set stock = ".$_POST["stock"].", tipoStock= '".trim($_POST["tipoStock"])."', categoria = '".trim($_POST["categoria"])."', descripcion = '".trim($_POST["descripcion"])."', nombre = '".trim($_POST["nombre"])."',
            precio = ".$_POST["precio"]."   where idAlmacen = ".$_POST["idAlmacen"]."");

          header("Location:index.php?menu=almacen");

        }



        mysqli_error($con);

      }

    }











?>
