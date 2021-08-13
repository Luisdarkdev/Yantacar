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
                          <ul class="navbar-nav mr-auto">
                          <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" ><i class="fa fa-cog fa-lg text-primary fa-lg" ></i></a>
                          <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="editcliente.php?CED_CLI=<?php echo $f['CED_CLI']?>"><i class="fa fa-pencil fa-lg"></i> Editar</a></li>
                            <li><a class="dropdown-item" href="funciones/deletecliente.php?CED_CLI=<?php echo $f['CED_CLI']?>"><i class="fa fa-trash fa-lg"></i> Eliminar</a></li>
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