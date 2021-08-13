<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_mo = new Clase_sql();

    $result_mo = $clase_mo-> ConsultaReservaGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Reservas</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Reservas</li>
          <li class="breadcrumb-item active"><a href="#">Gestionar Reservas</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Codigo de Reserva</th>
                      <th>Numero de matricula</th>
                      <th>Cedula Cliente</th>
                      <th>fecha de Reservacion</th>

                      <th>fecha de Inicio</th>
                      <th>fecha de Entrega</th>
                      <th>Precio</th>
                        <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_mo->fetch_assoc()){ ?>
                    <tr>
                        <td class="text-center"> <?php echo $f['COD_RE']; ?> </td>
                        <td class="text-center"> <?php echo $f['NUM_MAT_VE']; ?> </td>
                        <td class="text-center"> <?php echo $f['CED_CLI']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_RE']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_INI_RE']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_FIN']; ?> </td>
                        <td class="text-center"> <?php echo $f['PRECIO']; ?> </td>
                        <td class="text-center"> <?php echo $f['ESTADO']; ?> </td>
                        <td class="text-center" >
                        <ul class="navbar-nav mr-auto">
                          <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" ><i class="fa fa-cog fa-lg text-primary fa-lg" ></i></a>
                          <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="editreserva.php?COD_RE=<?php echo $f['COD_RE']?>"><i class="fa fa-pencil fa-lg"></i> Editar</a></li>
                            <li><a class="dropdown-item"href="funciones/cancelre.php?COD_RE=<?php echo $f['COD_RE']?>"><i class="fa fa-ban fa-lg"></i> Cancelar</a></li>
                            <li><a class="dropdown-item" href="funciones/finreserva.php?COD_RE=<?php echo $f['COD_RE']?>& NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>& CED_CLI=<?php echo $f['CED_CLI']?>& FECHA_INI_RE=<?php echo $f['FECHA_INI_RE'] ?>& FECHA_FIN=<?php echo $f['FECHA_FIN']?>& PRECIO=<?php echo $f['PRECIO'] ?>"><i class="fa fa-car fa-lg"></i> Alquilar</a></li>
                          </ul>
                          </li>
                          </ul>
  
                        </td>                    
                    </tr>
                    
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 
<?php include ("includes/footer.php")?>