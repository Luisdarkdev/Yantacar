<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_gcli = new Clase_sql();

    $result_gcli = $clase_gcli-> ConsultaClienteGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Cliente</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculos</li>
          <li class="breadcrumb-item active"><a href="#">Gestionar Cliente</a></li>
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
                      <th>Numero Cedula</th>
                      <th>Tipo de Cliente</th>
                      <th>Nombre de Cliente</th>
                      <th>Apellido de Cliente</th>
                      <th>Direccion de Cliente</th>
                      <th>Telefono de cliente</th>
                      <th>Correo Cliente</th>
                      <th>Contraseña</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_gcli->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $f['CED_CLI']; ?> </td>
                        <td> <?php echo $f['TIPO_CLIENTE']; ?> </td>
                        <td> <?php echo $f['NOM_TCLI']; ?> </td>
                        <td> <?php echo $f['APE_CLI']; ?> </td>
                        <td> <?php echo $f['DIR_CLI']; ?> </td>
                        <td> <?php echo $f['TELF_CLIF']; ?> </td>
                        <td> <?php echo $f['COR_CLI']; ?> </td>
                        <td> <?php echo $f['PASS_CLI']; ?> </td>
                        <td>
                            <a href="editcliente.php?CED_CLI=<?php echo $f['CED_CLI']?>" class="btn btn-success">
                            <i class="fa fa-pencil-square-o"></i>   
                            </a>
                            <a href="funciones/deletecliente.php?CED_CLI=<?php echo $f['CED_CLI']?>" class="btn btn-danger">
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