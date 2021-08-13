<?php
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';
$clase_ve = new Clase_sql();
$result_cli = $clase_ve-> ConsulTipoCliente();

if(isset($_GET['CED_CLI'])){
    $cod = $_GET['CED_CLI'];
    $result = $clase_ve-> ConsultarClienteUnico($cod);
    $row =mysqli_fetch_array($result);
    $cedula= $row['CED_CLI'];
    $tipcliente = $row['TIPO_CLIENTE'];
    $Nombre= $row['NOM_TCLI'];
    $apelido = $row['APE_CLI'];
    $diereccion = $row['DIR_CLI'];
    $telefono = $row['TELF_CLIF'];
    $ccorreo = $row['COR_CLI'];
    $ccontra = $row['PASS_CLI'];
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['CED_CLI'];
    $nummident = $_POST['nummident'];
    $Tcliente = $_POST['Tcliente'];
    $Inombres = $_POST['Inombres'];
    $Iapellidos = $_POST['Iapellidos'];
    $Idireccion = $_POST['Idireccion'];
    $Numtelef = $_POST['Numtelef'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    

    $result = $clase_ve-> ActualizarCliente($cod,$nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef,$correo,$contra);
    // header ('Location: consulta_cliente.php');
  header ('Location: page-gcliente.php');
}
?>

<?php 
include ("includes/header.php")
?>

<main class="app-content">

  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Editar CLiente</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Vehiculo</li>
      <li class="breadcrumb-item"><a href="#">Editar cliente</a></li>
    </ul>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="tile">
        <div class="row">
          <div class="col-lg-12">
            <form action="editcliente.php?CED_CLI=<?php echo $_GET['CED_CLI'];?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="form-group">
                    <label class="col-form-label" for="nummident">Numero de identificacion</label>
                    <input class="form-control" type="number" name="nummident" id="nummatricula" placeholder="Ingresar numero de identificacion" value="<?php echo $cedula; ?>" required>
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
                    <input class="form-control" type="text" name="Inombres" id="kvehiculo" placeholder="Ingresar Nombres" value="<?php echo $Nombre; ?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese nombres</div>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="Iapellidos">Apellidos</label>
                    <input class="form-control" type="text" name="Iapellidos" id="cvehiculo" placeholder="Ingresar Apellidos" value="<?php echo $apelido; ?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese Apellidos</div>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="Idireccion">Direccion</label>
                    <input class="form-control" type="text" name="Idireccion" id="cvehiculo" placeholder="Ingresar Direccion" value="<?php echo $diereccion; ?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese Direccion</div>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="Numtelef">Numero de Telefono</label>
                    <input class="form-control" type="number" name="Numtelef" id="cvehiculo" placeholder="Ingresar Numero de Telefono"value="<?php echo $telefono; ?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese Telefono</div>
               </div>
               <div class="form-group">
                        <label class="col-form-label" for="correo">Correo</label>
                        <input class="form-control" type="email" name="correo" id="email" placeholder="example@gmail.com" value="<?php echo $ccorreo; ?>"  required>
                        <span id="emailOK"></span>

                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="contra">Contraseña</label>
                        <input class="form-control" type="text" name="contra" id="contra" placeholder="Ingresar Contraseña" value="<?php echo $ccontra; ?>"  required>
                                <div class="invalid-feedback">Campo vacío Ingrese Contraseña</div>
                   </div>
               
                
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit-all"  name= "actualizar" id="">Actualizar</button>
                </div>
          </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<?php include ("includes/footer.php")?>