<?php

    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_cli = new Clase_sql();
    $result_cli = $clase_cli-> ConsulTipoCliente();
?>
<?php 
include ("includes/header.php")
?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Crear CLiente</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Crear cliente</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="funciones/insertcliente.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label" for="nummident">ID/RUC</label>
                        <input class="form-control" type="text" name="nummident" id="nummatricula" placeholder="Ingresar numero de identificacion" required>
                                <div class="invalid-feedback">Campo vacío Ingrese numero de identificacion</div>

                   </div>
                   <div class="form-group">
                    <label for="Tcliente">Tipo de cliente</label>
                    <select class="form-control" name="Tcliente">
                    <?php while($fic = $result_cli->fetch_assoc()){?>
                        <option value="<?php echo $fic['TIPO_CLIENTE']?>"><?php echo $fic['TIPO_CLIENTE']?></option>
                    <?php } ?>
                                                    
                    </select>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label" for="Inombres">Nombres</label>
                        <input class="form-control" type="text" name="Inombres" id="kvehiculo" placeholder="Ingresar Nombres" required>
                                <div class="invalid-feedback">Campo vacío Ingrese nombres</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="Iapellidos">Apellidos</label>
                        <input class="form-control" type="text" name="Iapellidos" id="cvehiculo" placeholder="Ingresar Apellidos" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Apellidos</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="Idireccion">Direccion</label>
                        <input class="form-control" type="text" name="Idireccion" id="cvehiculo" placeholder="Ingresar Direccion" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Direccion</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="Numtelef">Numero de Telefono</label>
                        <input class="form-control" type="text" name="Numtelef" id="cvehiculo" placeholder="Ingresar Numero de Telefono" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Telefono</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="correo">Correo</label>
                        <input class="form-control" type="text" name="correo" id="correo" placeholder="example@gmail.com" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Correo</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="contra">Contraseña</label>
                        <input class="form-control" type="text" name="contra" id="contra" placeholder="Ingresar Contraseña" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Contraseña</div>
                   </div>
                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all"  id="">Enviar</button>
                    </div>
              </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

<?php include ("includes/footer.php")?>