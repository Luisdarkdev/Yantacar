<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_vehi = new Clase_sql();

    $result_vehi = $clase_vehi-> ConsultaVehiculoGeneral();
 

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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Numero matricula</th>
                      <th>Nombre de modelo</th>
                      <th>Kilometraje</th>
                      <th>Color</th>
                      <th>Nombre Imagen</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_vehi->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $f['NUM_MAT_VE']; ?> </td>
                        <td> <?php echo $f['NOM_MOD']; ?> </td>
                        <td> <?php echo $f['KM_VE']; ?> </td>
                        <td> <?php echo $f['COLOR_VE']; ?> </td>
                        <td> <?php echo $f['IMG_VE']; ?> </td>
                        <td>
                            <a href="editvehiculo.php?NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>" class="btn btn-success">
                            <i class="fa fa-pencil-square-o"></i>   
                            </a>
                            <a href="funciones/deletevehiculo.php?NUM_MAT_VE=<?php echo $f['NUM_MAT_VE']?>" class="btn btn-danger">
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