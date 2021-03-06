<?php
session_start();

if(isset($_SESSION["usuario"])){
  include("../../includes/html.inc.php");
  include("../../includes/admindb.inc.php");
  include("../../includes/contenido.inc.php");


$conex = connectdb("caminodejose");
  headerlogin("administracion");

  accion($conex);


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
      echo "<h1 class='display-4'>Inicio</h1>";
      echo "<hr>";
      break;

      case "comidas":
       echo "
        <div class='jumbotron'>
          <h1 class='display-4'>Platos</h1>
          <p class='lead'>Aca se pueden administrar todo lo que se prepara en la cocina</p>
          <br>
          <hr class='m-y-md'>
          <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#insertar' aria-expanded='false' aria-controls='insertar'>Insertar plato</button>
          <div class='collapse' id='insertar'>
            <div class='card card-body'>
              <form method='POST' enctype='multipart/form-data' action='index.php?menu=comidas'>
                <input type='hidden' name='accion' value='insertar' />

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <label class='input-group-text' for='tipo'>Tipos</label>
                  </div>
                  <select class='custom-select' name='tipo' required>
                    <option selected>Elige...</option>
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
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre' minlength='4' required>
                </div>

                <div class='input-group'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text'>Descripcion</span>
                  </div>
                  <textarea class='form-control' aria-label='With textarea' name='descripcion'></textarea>
                </div>
                <br>
                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Precio</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='precio' required>
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

                <button type='sumbit' class='btn btn-primary'>Insertar</button>

              </form>
            </div>
          </div>


        </div>
        ";

      admin_comida($conex);
      break;

      case "almacen":
       echo "
        <div class='jumbotron'>
        <div class='row'>
          <div class='col-md-9 col-md-12'>

          </div>
        </div>
          <h1 class='display-4'>Almacen</h1>
          <p class='lead'>Puedes administrar tu inventario</p>
          <br>
          <hr class='m-y-md'>
          <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#insertar' aria-expanded='false' aria-controls='insertar'>Insertar plato</button>
          <div class='collapse' id='insertar'>
            <div class='card card-body'>
              <form method='POST' enctype='multipart/form-data' action='index.php?menu=almacen'>
                <input type='hidden' name='accion' value='insertaralm' />

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre'>
                </div>

                <div class='input-group'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text'>Descripcion</span>
                  </div>
                  <textarea class='form-control' aria-label='With textarea' name='descripcion'></textarea>
                </div>
                <br>
                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <label class='input-group-text' for='tipoStock'>Tipos</label>
                  </div>
                  <select class='custom-select' name='tipoStock'>
                    <option selected>Elige...</option>
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
                    <option selected>Elige...</option>
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
                  <input type='number' class='form-control' name='stock'>
                </div>

                <br>
                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Precio</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='precio'>
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
                <button type='sumbit' class='btn btn-primary'>Insertar</button>

              </form>
            </div>
          </div>


        </div>
        ";

      admin_almacen($conex);
      break;

      case "empleados":
       echo "
        <div class='jumbotron'>
          <h1 class='display-4'>Empleados</h1>
          <p class='lead'>Configuracion de usuarios</p>
          <br>
          <hr class='m-y-md'>
          <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#insertar' aria-expanded='false' aria-controls='insertar'>Nuevo empleado</button>
          <div class='collapse' id='insertar'>
            <div class='card card-body'>
              <form method='POST' enctype='multipart/form-data' action='index.php?menu=empleados'>
                <input type='hidden' name='accion' value='insertaremp' />

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombre'>
                </div>

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Direccion</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='direccion'>
                </div>

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Dni</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='dni' pattern='[0-9]{8}[A-Za-z]{1}' >
                </div>

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Email</span>
                  </div>
                  <input type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='email'>
                </div>

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Telefono</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='telefono' pattern='[0-9]{9}'>
                </div>

                <div class='input-group mb-3'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroup-sizing-default'>Contraseña</span>
                  </div>
                  <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='passwords' minlength='5'>
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


                <button type='sumbit' class='btn btn-primary'>Insertar</button>

              </form>
            </div>
          </div>


        </div>
        ";

      empleados($conex);
      break;

      case "pedidos":
      nombrespe($conex);
      pedidos($conex);


      break;

      case "reservas":
      echo "<div class='jumbotron'>
        <h1 class='display-4'>Reservas</h1>
        <p class='lead'>Administracion de reservas</p>
        <br>
        <hr class='m-y-md'>
        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#insertar' aria-expanded='false' aria-controls='insertar'>Nueva reserva</button>
        <div class='collapse' id='insertar'>
          <div class='card card-body'>
            <form method='POST' enctype='multipart/form-data' action='index.php?menu=reservas'>
              <input type='hidden' name='accion' value='insertareserva' />

              <div class='row'>
              <div class='input-group mb-3'>
                  <div class='col-md-2 col-sm-12'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroup-sizing-default'>Nombre</span>
                    </div>
                  </div>
                  <div class='col-md-10 col-sm-12'>
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='nombreCont'>
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
                    <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='telefono' pattern='[0-9]{9}'>
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
                    <input type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='fecha'>
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
                    <input type='time' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='hora'>
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
                    <input type='number' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='mesa'>
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
                    <textarea class='form-control' aria-label='With textarea' name='observaciones'></textarea>
                  </div>
                </div>
              </div>




              </div>



              <button type='sumbit' class='btn btn-primary'>Insertar</button>

            </form>
          </div>
        </div>


      ";
      reservas($conex);

      break;




  }
  ?>

  </section>

  <?php


	footerlogin();

}else{
  header("Location:../index.html");
}


 ?>
