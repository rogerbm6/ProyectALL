<?php
function manjares($con){

    $comidas_pequenos = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='pequenos'");

while($registro = mysqli_fetch_array($comidas_pequenos)){

  echo "
  <div class='jumbotron bg-secondary'>
    <div class='row'>
      <div class='col-md-9 col-sm-12'>
        <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
        <p class='lead'>".$registro["descripcion"]."</p>
        <p class='lead'>".$registro["precio"]." &euro;</p>

      </div>
      <div class='col-md-3 col-sm-12'>
      ";
        if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
          ?>
          <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
        <?php
        }
  echo "

      </div>
    </div>


  </div>";
    }
}


    function tapas($con){

        $comidas_tapas = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='tapas'");

		while($registro = mysqli_fetch_array($comidas_tapas)){

      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }
    }

    function picar($con){

        $comidas_jamques = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='jamques'");

    while($registro = mysqli_fetch_array($comidas_jamques)){


      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }
    }



    function ensaladas($con){

        $comidas_ensalada = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='ensalada'");

    while($registro = mysqli_fetch_array($comidas_ensalada)){


      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }
    }

    function vegetariano($con){

        $comidas_vegetariano = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='vegetariano'");

    while($registro = mysqli_fetch_array($comidas_vegetariano)){
      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }
    }


    function fuertes($con){

        $comidas_carne_pas_pes = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='carne' OR tipo='pescado' OR tipo='pasta'");

    while($registro = mysqli_fetch_array($comidas_carne_pas_pes)){
      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }
    }


    function postres($con){

        $comidas_postres = mysqli_query($con,"SELECT * FROM comidas WHERE tipo='postres'");

    while($registro = mysqli_fetch_array($comidas_postres)){

      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


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
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$almacen["nombre"]."</h1>
            <p class='lead'>".$almacen["descripcion"]."</p>
            <p class='lead'>".$almacen["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/almacen/alm_".$almacen["idAlmacen"].".jpeg")){
              ?>
              <img src="images/almacen/alm_<?php echo $almacen["idAlmacen"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "
        </div>

       </div>
      </div>";
            }


    while($registro = mysqli_fetch_array($comidas_bebidas)){


      echo "
      <div class='jumbotron bg-secondary'>
        <div class='row'>
          <div class='col-md-9 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$registro["nombre"]."</h1>
            <p class='lead'>".$registro["descripcion"]."</p>
            <p class='lead'>".$registro["precio"]." &euro;</p>

          </div>
          <div class='col-md-3 col-sm-12'>
          ";
            if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
              ?>
              <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
            <?php
            }
      echo "

          </div>
        </div>


      </div>";
        }

      while($licores = mysqli_fetch_array($almacen_licor)){
        echo "
        <div class='jumbotron bg-secondary'>
          <div class='row'>
            <div class='col-md-9 col-sm-12'>
              <h1 class='display-4' style='background-color: #d8a3b0;' id='tit'>".$licores["nombre"]."</h1>
              <p class='lead'>".$licores["descripcion"]."</p>
              <p class='lead'>".$licores["precio"]." &euro;</p>

            </div>
            <div class='col-md-3 col-sm-12'>
            ";
              if(file_exists("images/almacen/alm_".$licores["idAlmacen"].".jpeg")){
                ?>
                <img src="images/almacen/alm_<?php echo $licores["idAlmacen"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
              <?php
              }
        echo "
          </div>

        </div>
        </div>";
      }
    }

    function admin_comida($con){

        $comidas = mysqli_query($con,"SELECT * FROM comidas ORDER BY idComida DESC");


    while($registro = mysqli_fetch_array($comidas)){
      $ident = "a".$registro["idComida"];
      echo "
      <div class='jumbotron bg-secondary'>
      <div class='row'>
        <div class='col-md-9 col-sm-12'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
        <h1>".$registro["tipo"]."</h1>
        <p class='lead'>".$registro["descripcion"]."</p>
        <p class='lead'>".$registro["precio"]." &euro;</p>
        <p class='lead'>".$registro["alergenos"]."</p>
        </div>
        <div class='col-md-3 col-sm-12'>
        ";
          if(file_exists("../../images/platos/comida_".$registro["idComida"].".jpeg")){
            ?>
            <img src="../../images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
          <?php
          }
    echo "
        </div>
      </div>
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

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroupFileAddon01'>Foto</span>
                </div>
                <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='inputGroupFile01' aria-describedby='inputGroupFileAddon01' name='foto'>
                  <label class='custom-file-label' for='inputGroupFile01'> Elige la foto</label>
                </div>
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

        $almacen = mysqli_query($con,"SELECT * FROM almacen ORDER BY idAlmacen DESC");

    while($registro = mysqli_fetch_array($almacen)){
      $ident = "a".$registro["idAlmacen"];
      echo "
      <div class='jumbotron bg-secondary'>
      <div class='row'>
        <div class='col-md-9 col-sm-12'>
          <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
          <h1>".$registro["stock"]."</h1>
          <p class='lead'>".$registro["tipoStock"]."</p>
          <p class='lead'>".$registro["categoria"]."</p>
          <p class='lead'>".$registro["descripcion"]."</p>
          <p class='lead'>".$registro["precio"]." &euro;</p>
        </div>
        <div class='col-md-3 col-sm-12'>
        ";
          if(file_exists("../../images/almacen/alm_".$registro["idAlmacen"].".jpeg")){
            ?>
            <img src="../../images/almacen/alm_<?php echo $registro["idAlmacen"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
          <?php
          }
    echo "
        </div>
      </div>
        <hr>

        <a href='index.php?menu=almacen&accion=borraralm&idAlmacen=".$registro["idAlmacen"]."' class='btn btn-danger'>Borrar</a>


        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar producto</button>
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

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroupFileAddon01'>Foto</span>
                </div>
                <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='inputGroupFile01' aria-describedby='inputGroupFileAddon01' name='foto'>
                  <label class='custom-file-label' for='inputGroupFile01'> Elige la foto</label>
                </div>
              </div>

              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>




      </div>";
        }
    }

    function buscar($con){
      if (isset($_POST["buscar"])) {
        $plat =  "select * from comidas where nombre like '%".$_POST["palabra"]."%' or descripcion like '%".$_POST["palabra"]."%'";
        $busqueda = mysqli_query($con,$plat);
        while($registro = mysqli_fetch_array($busqueda)){

        echo "
        <div class='jumbotron bg-secondary'>
          <div class='row'>
            <div class='col-md-9 col-sm-12'>
              <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
              <p class='lead'>".$registro["descripcion"]."</p>
              <p class='lead'>".$registro["precio"]." &euro;</p>

            </div>
            <div class='col-md-3 col-sm-12'>
            ";
              if(file_exists("images/platos/comida_".$registro["idComida"].".jpeg")){
                ?>
                <img src="images/platos/comida_<?php echo $registro["idComida"]; ?>.jpeg" class='img-rounded img-fluid img-thumbnail'/>
              <?php
              }
        echo "

            </div>
          </div>


        </div>";


      }
    }
  }


    function accion($con){
      if(isset($_REQUEST["accion"])){
        $crud=$_REQUEST["accion"];

        if ($crud == "insertar") {

          $query =  "insert into comidas(tipo, nombre, descripcion, precio) values('".$_POST["tipo"]."', '".$_POST["nombre"]."','".$_POST["descripcion"]."' , '".$_POST["precio"]."' )";

          mysqli_query($con, $query);

          $foto = mysqli_insert_id($con);
		      move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/platos/comida_".$foto.".jpeg");

          header("Location:index.php?menu=comidas");

        }

        if ($crud == "borrar") {

          mysqli_query($con, "delete from comidas where idComida = ".$_GET["idComida"]." ;");
          if(file_exists("../../images/platos/comida_".$_REQUEST["idComida"].".jpeg")){
      			      unlink("../../images/platos/comida_".$_REQUEST["idComida"].".jpeg");
      		}
          header("Location:index.php?menu=comidas");

        }

        if ($crud == "actualizar") {

          mysqli_query($con, "update comidas set tipo = '".trim($_POST["tipo"])."', nombre= '".trim($_POST["nombre"])."', descripcion = '".trim($_POST["descripcion"])."', precio = ".$_POST["precio"]." where idComida = ".$_POST["idComida"]."");

          move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/platos/comida_".$_POST["idComida"].".jpeg");

          header("Location:index.php?menu=comidas");

        }

        if ($crud == "insertaralm") {

          $query =  "insert into almacen(stock, tipoStock, categoria, descripcion, nombre, precio) values(".$_POST["stock"].", '".$_POST["tipoStock"]."','".$_POST["categoria"]."' , '".$_POST["descripcion"]."' ,'".$_POST["nombre"]."',".$_POST["precio"]." )";
          mysqli_query($con, $query);
          $foto = mysqli_insert_id($con);
		      move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/almacen/alm_".$foto.".jpeg");



          header("Location:index.php?menu=almacen");

        }

        if ($crud == "borraralm") {

          mysqli_query($con, "delete from almacen where idAlmacen = ".$_GET["idAlmacen"]." ;");
          if(file_exists("../../images/almacen/alm_".$_REQUEST["idAlmacen"].".jpeg")){
      			      unlink("../../images/almacen/alm_".$_REQUEST["idAlmacen"].".jpeg");
      		}
          header("Location:index.php?menu=almacen");

        }

        if ($crud == "actualizaralm") {

          mysqli_query($con, "update almacen set stock = ".$_POST["stock"].", tipoStock= '".trim($_POST["tipoStock"])."', categoria = '".trim($_POST["categoria"])."', descripcion = '".trim($_POST["descripcion"])."', nombre = '".trim($_POST["nombre"])."',
            precio = ".$_POST["precio"]."   where idAlmacen = ".$_POST["idAlmacen"]."");

          move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/almacen/alm_".$_POST["idAlmacen"].".jpeg");
          header("Location:index.php?menu=almacen");

        }

        if ($crud == "actualizaremp") {

          mysqli_query($con, "update empleados set nombre = '".trim($_POST["nombre"])."', direccion= '".trim($_POST["direccion"])."', dni = '".trim($_POST["dni"])."', email = '".trim($_POST["email"])."', telefono = '".trim($_POST["telefono"])."',
            passwords = '".trim(md5($_POST["passwords"]))."'   where idEmpleado = ".$_POST["idEmpleado"]."");

            move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/emple/emp_".$_POST["idEmpleado"].".jpeg");

          header("Location:index.php?menu=empleados");

        }

        if ($crud == "insertaremp") {

          $query =  "insert into empleados(direccion, dni, nombre, email, passwords, telefono) values('".$_POST["direccion"]."', '".$_POST["dni"]."','".$_POST["nombre"]."' , '".$_POST["email"]."' ,'".$_POST["passwords"]."','".$_POST["telefono"]."' )";

          mysqli_query($con, $query);

          $foto = mysqli_insert_id($con);
		      move_uploaded_file($_FILES['foto']['tmp_name'],"../../images/emple/emp_".$foto.".jpeg");

          header("Location:index.php?menu=empleados");

        }

        if ($crud == "borraremp") {

          mysqli_query($con, "delete from empleados where idEmpleado = ".$_GET["idEmpleado"]." ;");

          if(file_exists("../../images/emple/emp_".$_REQUEST["idEmpleado"].".jpeg")){
      			      unlink("../../images/emple/emp_".$_REQUEST["idEmpleado"].".jpeg");
      		}

          header("Location:index.php?menu=empleados");

        }
        if ($crud == "insertarpe") {

          $query =  "insert into pedidos(TlfCont, fechahora, nombreCont, idEmpleado, fecha, hora) values('".$_POST["TlfCont"]."', now(), '".$_POST["nombreCont"]."' ,(select idEmpleado from empleados where nombre='".$_SESSION["usuario"]."'), '".$_POST["fecha"]."' ,'".$_POST["hora"]."');";

          mysqli_query($con, $query);
          $ide = mysqli_insert_id($con);

          $querys="insert into solicitan(idPedido,idComida, cantidad) values(".$ide.", ".$_POST["idComida"].", ".$_POST["cantidad"].")";
          mysqli_query($con,$querys);

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "actualizarped") {

          mysqli_query($con, "update pedidos set TlfCont = '".trim($_POST["TlfCont"])."', nombreCont= '".trim($_POST["nombreCont"])."', fecha = '".trim($_POST["fecha"])."', hora = '".trim($_POST["hora"])."' where idPedido = ".$_POST["idPedido"]."");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "borrarped") {

          mysqli_query($con, "delete from pedidos where idPedido = ".$_GET["idPedido"].";");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "borrarpla") {

          mysqli_query($con, "delete from solicitan where idPedido = ".$_GET["idPedido"]." and idComida=".$_GET["idComida"].";");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "actualizarplatopedido") {

          mysqli_query($con, "update solicitan set cantidad = '".trim($_POST["cantidad"])."' where idPedido = ".$_POST["idPedido"]." and idComida=".$_POST["idComida"]."");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "insertarplatopedido") {

          mysqli_query($con, "insert into solicitan(idPedido,idComida, cantidad) values(".$_POST["idPedido"].",".$_POST["idComida"].",".$_POST["cantidad"].")");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "borrarbe") {

          mysqli_query($con, "delete from salen where idPedido = ".$_GET["idPedido"]." and idAlmacen=".$_GET["idAlmacen"].";");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "actualizarplatobebida") {

          mysqli_query($con, "update salen set cantidad = '".trim($_POST["cantidad"])."' where idPedido = ".$_POST["idPedido"]." and idAlmacen=".$_POST["idAlmacen"]."");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "insertarplatobebida") {

          mysqli_query($con, "insert into salen(idPedido,idAlmacen, cantidad) values(".$_POST["idPedido"].",".$_POST["idAlmacen"].",".$_POST["cantidad"].")");

          header("Location:index.php?menu=pedidos");

        }

        if ($crud == "insertareserva") {

          $query =  "insert into reservas(mesa, nombreCont, telefono, fecHorllamada, observaciones, fecha, hora, idEmpleado) values(".$_POST["mesa"].", '".$_POST["nombreCont"]."','".$_POST["telefono"]."' , now() ,'".$_POST["observaciones"]."','".$_POST["fecha"]."','".$_POST["hora"]."',(select idEmpleado from empleados
          where nombre='".$_SESSION["usuario"]."') )";


          mysqli_query($con, $query);

          header("Location:index.php?menu=reservas");

        }

        if ($crud == "borrareser") {

          mysqli_query($con, "delete from reservas where idreserva = ".$_GET["idreserva"].";");

          header("Location:index.php?menu=reservas");

        }

        if ($crud == "actualizareserva") {

          mysqli_query($con, "update reservas set nombreCont = '".trim($_POST["nombre"])."', telefono='".trim($_POST["telefono"])."',fecha='".trim($_POST["fecha"])."',hora='".trim($_POST["hora"])."'
          ,mesa='".trim($_POST["mesa"])."',observaciones='".trim($_POST["observaciones"])."' where idreserva = ".$_POST["idreserva"]."");

          header("Location:index.php?menu=reservas");

        }



        mysqli_error($con);

      }

    }



    function reservas($con){

      $reservas = mysqli_query($con,"SELECT r.idreserva, r.nombreCont,r.telefono'tl',r.fecha,r.hora,r.mesa,r.observaciones,e.nombre'em' FROM reservas r left join empleados e on e.idEmpleado=r.idreserva ORDER BY idreserva DESC");

    while($registro = mysqli_fetch_array($reservas)){
      $ident = "a".$registro["idreserva"];
      echo "
      <div class='jumbotron bg-secondary'>

      <div class='row'>
        <div class='col-md-7 col-sm-12'>
          <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombreCont"]."</h1>
          <p class='lead'>Tlf:".$registro["tl"]."</p>
          <p class='lead'>Fecha: ".$registro["fecha"]."  Hora: ".$registro["hora"]."</p>
          <p class='lead'>Mesa : ".$registro["mesa"]."</p>
          <p class='lead'>Hecha por : ".$registro["em"]."</p>
        </div>
        <div class='col-md-5 col-sm-12'>
        <h1>".$registro["observaciones"]."</h1>
        </div>
      </div>

        <hr>
        <a href='index.php?menu=reservas&accion=borrareser&idreserva=".$registro["idreserva"]."' class='btn btn-danger'>Borrar</a>


        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar</button>
        <div class='collapse' id='".$ident."'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=reservas'>
              <input type='hidden' name='accion' value='actualizareserva' />
              <input type='hidden' name='idreserva' value='".$registro["idreserva"]."'/>

              <div class='row'>
                <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre' value=".$registro["nombreCont"].">
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Telefono</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='telefono' value=".$registro["tl"]." pattern='[0-9]{9}'>
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Fecha</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='fecha' value=".$registro["fecha"].">
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Hora</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='time' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='hora' value=".$registro["hora"].">
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Mesa</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='number' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='mesa' value=".$registro["mesa"].">
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class='input-group'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text'>Observaciones</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <textarea class='form-control' aria-label='With textarea' name='observaciones'>".$registro["observaciones"]."</textarea>
                  </div>
                </div>
              </div>









              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>




      </div>";
        }
    }


    function empleados($con){

      $empleados = mysqli_query($con,"SELECT * FROM empleados ORDER BY idEmpleado DESC");

    while($registro = mysqli_fetch_array($empleados)){
      $ident = "a".$registro["idEmpleado"];
      echo "
      <div class='jumbotron bg-secondary'>

      <div class='row'>
        <div class='col-md-3 col-sm-12 border'>
          ";
            if(file_exists("../../images/emple/emp_".$registro["idEmpleado"].".jpeg")){
              ?>
              <img src="../../images/emple/emp_<?php echo $registro["idEmpleado"]; ?>.jpeg" class='img-rounded img-fluid'/>
            <?php
            }
      echo "
        </div>
        <div class='col-md-9 col-sm-12'>
        <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombre"]."</h1>
        <h1>Dni: ".$registro["dni"]."</h1>
        <p class='lead'>".$registro["direccion"]."</p>
        <p class='lead'>".$registro["email"]."</p>
        <p class='lead'>".$registro["telefono"]."</p>
        </div>
      </div>
        <hr>
        <a href='index.php?menu=empleados&accion=borraremp&idEmpleado=".$registro["idEmpleado"]."' class='btn btn-danger'>Borrar</a>


        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar</button>
        <div class='collapse' id='".$ident."'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=empleados'>
              <input type='hidden' name='accion' value='actualizaremp' />
              <input type='hidden' name='idEmpleado' value='".$registro["idEmpleado"]."'/>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre' value=".$registro["nombre"].">
              </div>
              <br>
              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Direccion</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='direccion' value=".$registro["direccion"].">
              </div>

              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Dni</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='dni' value=".$registro["dni"]." pattern='[0-9]{8}[A-Za-z]{1}'>
              </div>

              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Email</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='email' value=".$registro["email"].">
              </div>

              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Telefono</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='telefono' value=".$registro["telefono"]." pattern='[0-9]{9}'>
              </div>

              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroup-sizing-default'>Contraseña</span>
                </div>
                <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='passwords' value=".$registro["passwords"]." >
              </div>

              <br>

              <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                  <span class='input-group-text' id='inputGroupFileAddon01'>Foto</span>
                </div>
                <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='inputGroupFile01' aria-describedby='inputGroupFileAddon01' name='foto'>
                  <label class='custom-file-label' for='inputGroupFile01'> Elige la foto</label>
                </div>
              </div>

              <br>




              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>




      </div>";
        }
    }



    function pedidos($con){

      $pedidos = mysqli_query($con,"SELECT *
        FROM pedidos pe left join empleados em on pe.idEmpleado=em.idEmpleado  order by idPedido desc");
      $platos = mysqli_query($con,"SELECT * FROM comidas");


    while($registro = mysqli_fetch_array($pedidos)){
      $ident = "a".$registro["idPedido"];
      $identif = "b".$registro["idPedido"];
      $identib = "c".$registro["idPedido"];
      $idee=$registro["idPedido"];
      echo "
      <div class='jumbotron bg-secondary'>

        <div class='row'>
          <div class='col-md-6 col-sm-12'>
            <h1 class='display-4' style='background-color: #d8a3b0;'>".$registro["nombreCont"]."</h1>
          </div>
          <div class='col-md-6 col-sm-12'>
            <h1 class='display-4'>Tlf: ".$registro["TlfCont"]."</h1>
          </div>
        </div>

        <div class='row'>
          <div class='col-md-6 col-sm-12'>
            <h3>Fecha: ".$registro["fecha"]."</h3>
          </div>
          <div class='col-md-6 col-sm-12'>
            <h3>Hora: ".$registro["hora"]."</h3>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-6 col-sm-12'>



        <table class='table table-striped table-sm'>
          <thead>
            <tr>
              <th scope='col'>Precio bebida</th>
              <th scope='col'>Bebida</th>
              <th scope='col'>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            ";

          $pedi2 = mysqli_query($con,"SELECT al.precio 'prea', sa.cantidad 'can',
           al.nombre 'alm'
            FROM pedidos pe join salen sa on pe.idPedido=sa.idPedido  join almacen al on al.idAlmacen=sa.idAlmacen
            where pe.idPedido= ".$idee."");
            while($registros2 = mysqli_fetch_array($pedi2)){

              echo "<tr>";
                      if (isset($registros2["prea"])) {
                        echo "<td>".$registros2["prea"]*$registros2["can"]." &euro;</td>";
                      }else {echo "<td>NO</td>";}
                      if (isset($registros2["alm"])) {
                        echo "<td>".$registros2["alm"]."</td>";
                      }else echo "<td>NO</td>";
                      echo "<td>".$registros2["can"]."</td>";
              echo "</tr>";
                      }
      echo "
          </tbody>
          </table>
          </div>
          <div class='col-md-6 col-sm-12'>
          <table class='table table-striped table-sm'>
            <thead>
              <tr>
                <th scope='col'>Precio platos</th>
                <th scope='col'>Plato</th>
                <th scope='col'>Cantidad</th>
              </tr>
            </thead>
            <tbody>
          ";

          $pedi3 = mysqli_query($con,"SELECT co.precio 'pre', so.cantidad 'can',
            co.nombre 'com'
            FROM pedidos pe  join solicitan so on pe.idPedido =so.idPedido  join comidas co on co.idComida=so.idComida            where pe.idPedido= ".$idee."");
            while($registros = mysqli_fetch_array($pedi3)){

              echo "<tr>";
                      if (isset($registros["pre"])) {
                        echo "<td>".$registros["pre"]*$registros["can"]." &euro;</td>";
                      }else {echo "<td>NO</td>";}
                      if (isset($registros["com"])) {
                        echo "<td>".$registros["com"]."</td>";
                      }else echo "<td>NO</td>";
                      echo "<td>".$registros["can"]."</td>";
              echo "</tr>";
                      }




    echo "
              </tbody>
            </table>
          </div>

        </div>";




echo "

        <div class='row'>
          <div class='col-6'>
            <p class='lead'>Total: ".$registro["importe"]." &euro;</p>
          </div>
          <div class='col-6'>
            <p class='lead'>Hecha por: ".$registro["nombre"]."</p>
          </div>
        </div>



        <hr>
        <a href='index.php?menu=pedidos&accion=borrarped&idPedido=".$registro["idPedido"]."' class='btn btn-danger flex-sm-nowrap'>Borrar</a>


        <button class='btn btn-primary flex-sm-nowrap' type='button' data-toggle='collapse' data-target='#".$ident."' aria-expanded='false' aria-controls='".$ident."'>Actualizar</button>

        <button type='button' class='btn btn-success flex-sm-nowrap' data-toggle='modal' data-target='#".$identif."'>
          Platos
        </button>

        <button type='button' class='btn btn-success' data-toggle='modal' data-target='#".$identib."'>
          Bebidas
        </button>


        <div class='modal fade' id=".$identib." tabindex='-1' role='dialog' aria-labelledby=".$identib." aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Administrar Bebidas</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>

                        <div class='row'>
                          <div class='col-12'>
                            <ul class='list-group'>";

                  $pedial = mysqli_query($con,"SELECT al.precio 'pre', sa.cantidad 'can',
                    al.nombre 'alm', al.idAlmacen 'idal', pe.idPedido 'idpe'
                    FROM pedidos pe  join salen sa on pe.idPedido =sa.idPedido  join almacen al on al.idAlmacen=sa.idAlmacen   where pe.idPedido= ".$idee."");
                    while($regi2 = mysqli_fetch_array($pedial)){


                        echo "
                              <div class='row'>
                                <div class='col-md-8 col-sm-12'>
                                  <li class='list-group-item d-flex justify-content-between align-items-center'>
                                  ".$regi2["alm"]." -- ".$nul = $regi2["pre"]*$regi2["can"]."&euro;
                                <a href='index.php?menu=pedidos&accion=borrarbe&idPedido=".$idee."&idAlmacen=".$regi2["idal"]."' class='btn btn-danger'>Borrar</a>
                                  </li>
                                </div>
                                <div class='col-md-4 col-sm-12'>
                                  <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
                                    <input type='hidden' name='accion' value='actualizarplatobebida' />
                                    <input type='hidden' name='idPedido' value='".$regi2["idpe"]."'/>
                                    <input type='hidden' name='idAlmacen' value='".$regi2["idal"]."'/>
                                    <div class='input-group py-3'>
                                      <input type='number' class='form-control' aria-describedby='basic-addon1' name='cantidad' value='".$regi2["can"]."' >
                                      <div class='input-group-append'>
                                        <button class='btn btn-success' type='sumbit'>Guardar</button>
                                      </div>

                                    </div>
                                    </div>
                                  </form>
                                </div>


                              ";


                              }


                              echo "<label for='platos'>Insertar bebida</label>
                              <div class='row'>
                                      <div class='col-md-8 col-sm-12'>
                                        <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
                                          <input type='hidden' name='accion' value='insertarplatobebida' />
                                          <input type='hidden' name='idPedido' value='".$idee."'/>
                                          <div class='row'>
                                            <div class='col-md-12 col-sm-12'>
                                            <div class='form-group'>

                                              <select class='form-control' id='bebidas' name='idAlmacen'>";

                                          $pedial2 = mysqli_query($con,"SELECT nombre, idAlmacen
                                            FROM almacen  ");
                                            while($registros3 = mysqli_fetch_array($pedial2)){
                                              echo "<option value=".$registros3["idAlmacen"].">".$registros3["nombre"]."</option>";
                                            }
                                                echo "
                                              </select>
                                              </div>
                                            </div>
                                            <div class='col-md-12 col-sm-12'>
                                            <div class='form-group'>
                                            <div class='input-group py-3'>
                                              <input type='number' class='form-control' aria-describedby='basic-addon1' name='cantidad' value='1'>
                                              <div class='input-group-append'>
                                                <button class='btn btn-success d-inline' type='sumbit'>Guardar</button>
                                              </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </form>
                                      </div>
                                    </div>

                              </ul>
                            </div>
                          </div>";







echo "


              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
              </div>
            </div>
          </div>
        </div>




        <div class='modal fade' id=".$identif." tabindex='-1' role='dialog' aria-labelledby=".$identif." aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Administrar Platos</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>


                  <div class='row'>
                          <div class='col-12'>
                            <ul class='list-group'>";

                  $pedi4 = mysqli_query($con,"SELECT co.precio 'pre', so.cantidad 'can',
                    co.nombre 'com', co.idComida 'idco', pe.idPedido 'idpe'
                    FROM pedidos pe  join solicitan so on pe.idPedido =so.idPedido  join comidas co on co.idComida=so.idComida   where pe.idPedido= ".$idee."");
                    while($registros2 = mysqli_fetch_array($pedi4)){


                        echo "
                              <div class='row'>
                                <div class='col-md-8 col-sm-12'>
                                  <li class='list-group-item d-flex justify-content-between align-items-center'>
                                  ".$registros2["com"]." -- ".$mul = $registros2["pre"]*$registros2["can"]."
                                <a href='index.php?menu=pedidos&accion=borrarpla&idPedido=".$idee."&idComida=".$registros2["idco"]."' class='btn btn-danger'>Borrar</a>
                                  </li>
                                </div>
                                <div class='col-md-4 col-sm-12'>
                                  <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
                                    <input type='hidden' name='accion' value='actualizarplatopedido' />
                                    <input type='hidden' name='idPedido' value='".$registros2["idpe"]."'/>
                                    <input type='hidden' name='idComida' value='".$registros2["idco"]."'/>
                                    <div class='input-group py-3'>
                                      <input type='number' class='form-control' aria-describedby='basic-addon1' name='cantidad' value='".$registros2["can"]."' >
                                      <div class='input-group-append'>
                                        <button class='btn btn-success' type='sumbit'>Guardar</button>
                                      </div>

                                    </div>
                                    </div>
                                  </form>
                                </div>


                              ";


                              }


                              echo "<label for='platos'>Insertar plato</label>
                              <div class='row'>
                                      <div class='col-md-8 col-sm-12'>
                                        <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
                                          <input type='hidden' name='accion' value='insertarplatopedido' />
                                          <input type='hidden' name='idPedido' value='".$idee."'/>
                                          <div class='row'>
                                            <div class='col-md-12 col-sm-12'>
                                            <div class='form-group'>

                                              <select class='form-control' id='platos' name='idComida'>";

                                          $pedi5 = mysqli_query($con,"SELECT nombre, idComida
                                            FROM comidas");
                                            while($registros3 = mysqli_fetch_array($pedi5)){
                                              echo "<option value=".$registros3["idComida"].">".$registros3["nombre"]."</option>";
                                            }
                                                echo "
                                              </select>
                                              </div>
                                            </div>
                                            <div class='col-md-12 col-sm-12'>
                                            <div class='form-group'>
                                            <div class='input-group py-3'>
                                              <input type='number' class='form-control' aria-describedby='basic-addon1' name='cantidad' value='1'>
                                              <div class='input-group-append'>
                                                <button class='btn btn-success d-inline' type='sumbit'>Guardar</button>
                                              </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </form>
                                      </div>
                                    </div>

                              </ul>
                            </div>
                          </div>";







echo "




              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
              </div>
            </div>
          </div>
        </div>


        <div class='collapse' id='".$ident."'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
              <input type='hidden' name='accion' value='actualizarped' />
              <input type='hidden' name='idPedido' value='".$registro["idPedido"]."'/>

                <div class='row'>
                  <div class='input-group mb-3'>
                   <div class='col-3'>
                     <div class='input-group-prepend'>
                       <span class='input-group-text' id='inputGroup-sizing-default'>Nombre contacto </span>
                     </div>
                   </div>
                   <div class='col-9'>
                     <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombreCont' value=".$registro["nombreCont"].">
                   </div>
                 </div>


                 <div class='input-group mb-3'>
                   <div class='col-3'>
                     <div class='input-group-prepend'>
                       <span class='input-group-text' id='inputGroup-sizing-default'>Telefono Contacto </span>
                     </div>
                   </div>
                   <div class='col-9'>
                     <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='TlfCont' pattern='[0-9]{9}' value=".$registro["TlfCont"].">
                   </div>
                 </div>

                 <div class='input-group mb-3'>
                   <div class='col-3'>
                     <div class='input-group-prepend'>
                       <span class='input-group-text' id='inputGroup-sizing-default'>Fecha</span>
                     </div>
                   </div>
                   <div class='col-9'>
                     <input type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='fecha' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}' value=".$registro["fecha"].">
                   </div>
                 </div>

                 <div class='input-group mb-3'>
                   <div class='col-3'>
                     <div class='input-group-prepend'>
                       <span class='input-group-text' id='inputGroup-sizing-default'>Hora</span>
                     </div>
                   </div>
                   <div class='col-9'>
                       <input type='time' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='hora' value=".$registro["hora"].">
                   </div>
                 </div>


                </div>


              <button type='sumbit' class='btn btn-primary'>Aceptar</button>

            </form>
          </div>
        </div>
</div>

";
        }
    }


    function nombrespe($con){

      $platos = mysqli_query($con,"SELECT * FROM comidas");

      echo "
       <div class='jumbotron'>
         <h1 class='display-4'>Pedidos</h1>
         <p class='lead'>Configuracion de los pedidos</p>
         <br>
         <hr class='m-y-md'>
         <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#pedido' aria-expanded='false' aria-controls='pedido'>Nuevo pedido</button>
         <div class='collapse' id='pedido'>
           <div class='card card-body'>
             <form method='POST' enctype='multipart/form-data' action='index.php?menu=pedidos'>
               <input type='hidden' name='accion' value='insertarpe' />

               <div class='row'>
                 <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Nombre contacto </span>
                    </div>
                  </div>
                  <div class='col-md-9'>
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombreCont'>
                  </div>
                </div>


                <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Telefono Contacto </span>
                    </div>
                  </div>
                  <div class='col-md-9'>
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='TlfCont' pattern='[0-9]{9}' tittle='telefono de nueve numeros''>
                  </div>
                </div>

                <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Fecha</span>
                    </div>
                  </div>
                  <div class='col-md-9'>
                    <input type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='fecha' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
                  </div>
                </div>

                <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Hora</span>
                    </div>
                  </div>
                  <div class='col-md-9'>
                      <input type='time' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='hora'>
                  </div>
                </div>


                <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <label class='input-group-text' for='idComida'>Plato</label>
                    </div>
                  </div>
                  <div class='col-md-9'>
                    <select class='custom-select' name='idComida'>";

        while($registro = mysqli_fetch_array($platos)){
        echo "         <option value='".$registro["idComida"]."'>".$registro["nombre"]."</option>
                      ";
                    }

         echo "     </select>
                  </div>
                </div>

                <div class='input-group mb-3'>
                  <div class='col-md-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Cantidad</span>
                    </div>
                  </div>
                  <div class='col-md-9'>
                    <input type='number' class='form-control' name='cantidad'>
                  </div>

                </div>

               </div>


               <button type='sumbit' class='btn btn-primary'>Insertar</button>


             </form>
           </div>
         </div>


       </div>
       ";



    }


?>
