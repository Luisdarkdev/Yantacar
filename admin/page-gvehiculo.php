<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_vehi = new Clase_sql();

    $result_vehi = $clase_vehi-> ConsultaVehiculoGeneral();
    $result_in = $clase_vehi-> ConsultaIncidenciaGeneral();

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Vehiculos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculos</li>
          <li class="breadcrumb-item active"><a href="#">Gestionar Vehiculos</a></li>
        </ul>
      </div>
      <div class="row justify-content-center" >
        <div class="col-md-12">
          <div class="tile">
          <i class="fa fa-car"></i><span class="h5 ">  Lista Vehiculos</span> <hr>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Numero matricula</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Kilometraje</th>
                      <th>Color</th>
                      <th>Capacidad</th>
                      <th>Combustible</th>
                      <th>Transmision</th>
                      <th>Precio</th>
                      <th>Imagen</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_vehi->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $f['NUM_MAT_VE']; ?> </td>
                        <td> <?php echo $f['NOM_MARC']; ?> </td>
                        <td> <?php echo $f['NOM_MODEL']; ?> </td>
                        <td> <?php echo $f['KM_VE']; ?> </td>
                        <td> <?php echo $f['COLOR_VE']; ?> </td>
                        <td> <?php echo $f['CAPACIDAD']; ?> </td>
                        <td> <?php echo $f['COMBUSTIBLE']; ?> </td>
                        <td> <?php echo $f['TRANSMISION']; ?> </td>
                        <td> <?php echo $f['PRECIO_VE']; ?> </td>
                        <td> <img src=" <?php echo substr($f['IMG_VE'],3);?>" width="60" alt=""> </td>
                        <td class="text-center">
                            <a href="editvehiculo.php?NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>" class="btn btn-secondary">
                            <i class="fa fa-pencil-square-o"></i>   
                            </a>
                            <a href="funciones/deletevehiculo.php?NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            </a>
                            <a href="page-incidencia.php?NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>" class="btn btn-warning">
                            <i class="fa fa-file-text-o"></i>
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
        <div class="col-md-10">
          <div class="tile">
          <i class="fa fa-file "></i>   <span class="h5 ">Lista Incidentes</span><hr>
            <div class="tile-body">
            
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTabl" >
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Numero de Matricula</th>
                      <th>Descripcion</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($f = $result_in->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $f['COD_INCI']; ?> </td>
                        <td> <?php echo $f['NUM_MAT_VE']; ?> </td>
                        <td> <?php echo $f['DES_INCI']; ?> </td>
                        <td class="text-center">
                            <a href="funciones/deleteincidente.php?COD_INCI=<?php echo $f['COD_INCI']?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
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