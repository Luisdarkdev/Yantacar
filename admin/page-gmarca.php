<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_mo = new Clase_sql();

    $result_mo = $clase_mo-> ConsultaMarcaGeneral();
 

?>
<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gestionar Marca</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculos</li>
          <li class="breadcrumb-item active"><a href="#">Gestionar Marca</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Nombre Marca</th>
                      <th>Imagen</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($f = $result_mo->fetch_assoc()){ ?>
                    <tr>
                        <td class="text-center"> <?php echo $f['NOM_MARC']; ?> </td>
                        <td class="text-center"> <img src="<?php echo substr($f['IMG_MARCA'],3); ?>" width="100" alt="">  </td>
                        <td class="text-center">
                        <ul class="navbar-nav mr-auto">
                          <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" ><i class="fa fa-cog fa-lg text-primary fa-lg" ></i></a>
                          <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="editmarca.php?NOM_MARC=<?php echo $f['NOM_MARC']?>"><i class="fa fa-pencil fa-lg"></i> Editar</a></li>
                            <li><a class="dropdown-item"href="funciones/deletemarca.php?NOM_MARC=<?php echo $f['NOM_MARC']?>"><i class="fa fa-trash fa-lg"></i> Eliminar</a></li>
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