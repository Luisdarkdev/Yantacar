<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_mo = new Clase_sql();

    $result_mo = $clase_mo-> ConsultaFacturaGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar facturas</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered " id="sampleTable" >
                  <thead >
                    <tr>
                    <th>Codigo fac.</th>                   
                      <th>Usuario</th>
                      <th>Cliente</th>
                      <th>Nombre Cliente</th>
                      <th>Codigo al.</th>

                      <th>Fecha fac</th>
                      <th>Matricula</th>
                      <th>Fecha Ini</th>
                        <th>Fecha fin</th>
                        <th>Total fac</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_mo->fetch_assoc()){ ?>
                    <tr>
                        <td class="text-center"> <?php echo $f['COD_FAC']; ?> </td>
                        <td class="text-center"> <?php echo $f['CED_USU']; ?> </td>
                        <td class="text-center"> <?php echo $f['CED_CLI']; ?> </td>
                        <td class="text-center"> <?php echo $f['NOMBRE']; ?> </td>
                        <td class="text-center"> <?php echo $f['COD_AL']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_FAC']; ?> </td>
                        <td class="text-center"> <?php echo $f['MATRICULA']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_INIT']; ?> </td>
                        <td class="text-center"> <?php echo $f['FECHA_FIN']; ?> </td>
                        <td class="text-center"> <?php echo $f['TOTAL_FAC']; ?> </td>                  
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