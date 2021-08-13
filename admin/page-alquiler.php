<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_mo = new Clase_sql();

    $result_mo = $clase_mo-> ConsultaAlquilerGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Alquiler</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th>Codigo de Alquiler</th>                   
                      <th>Numero de matricula</th>
                      <th>Codigo de Reserva</th>
                      <th>Cedula Cliente</th>
                      <th>fecha de Alquiler</th>

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
                        <td class="text-center"> <?php echo $f['COD_AL']; ?> </td>
                        <td class="text-center"> <?php echo $f['NUM_MAT_VE']; ?> </td>
                        <td class="text-center"> <?php echo $f['COD_RE']; ?> </td>
                        <td class="text-center"> <?php echo $f['CED_CLI']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_AL']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_INI_AL']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_FIN_AL']; ?> </td>
                        <td class="text-center"> <?php echo $f['PRECIO']; ?> </td>
                        <td class="text-center"> <?php echo $f['ESTADO']; ?> </td>
                        <td class="text-center" >
                            <a href="funciones/cancelre.php?COD_AL=<?php echo $f['COD_AL']?>" class="btn btn-warning">
                            <i class="fa fa-ban"></i>   
                            </a>
                            <a href="funciones/factura.php?COD_AL=<?php echo $f['COD_AL']?>" class="btn btn-success">
                            <i class="fa fa-car"></i>   
                            </a>
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