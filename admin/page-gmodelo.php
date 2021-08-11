<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_mo = new Clase_sql();

    $result_mo = $clase_mo-> ConsultaModeloGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Modelo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculos</li>
          <li class="breadcrumb-item active"><a href="#">Gestionar Modelo</a></li>
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
                      <th>Nombre Modelo</th>
                      <th>Marca Modelo</th>
                      <th>Precio por dia</th>
                      <th>Combustible</th>
                      <th>Transmision</th>
                      <th>Capacidad</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_mo->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $f['NOM_MOD']; ?> </td>
                        <td> <?php echo $f['MARCA_MOD']; ?> </td>
                        <td> <?php echo $f['PRECIO_MOD']; ?> </td>
                        <td> <?php echo $f['CONBUSTIBE']; ?> </td>
                        <td> <?php echo $f['TRANSMISION']; ?> </td>
                        <td> <?php echo $f['CAPACIDAD']; ?> </td>
                        <td>
                            <a href="editmodelo.php?NOM_MOD=<?php echo $f['NOM_MOD']?>" class="btn btn-success">
                            <i class="fa fa-pencil-square-o"></i>   
                            </a>
                            <a href="funciones/deletemodelo.php?NOM_MOD=<?php echo $f['NOM_MOD']?>" class="btn btn-danger">
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