
<?php
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';
$clase_ve = new Clase_sql();

if(isset($_GET['COD_RE'])){
    $cod = $_GET['COD_RE'];
    $result = $clase_ve-> ConsultarReservaUnico($cod);
    $row =mysqli_fetch_array($result);
    $num_mar = $row['NUM_MAT_VE']; 
    $ced_mar = $row['CED_CLI'];
    $fech_mar = $row['FECHA_RE'];
    $fe_mar = $row['FECHA_INI_RE'];
    $f_mar = $row['FECHA_FIN'];
    $pre_mar = $row['PRECIO'];
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['COD_RE'];
    $nummat = $_POST['nummat'];
    $cliente = $_POST['cliente'];
    $dat = $_POST['dat'];
    $date = $_POST['date'];
    $date1 = $_POST['date1'];
    $precio = $_POST['precio'];


    $result = $clase_ve-> ActualizarReserva($cod,$nummat,$cliente,$dat,$date,$date1,$precio);
    // header ('Location: consulta_cliente.php');
  header ('Location: page-greservas.php');
}
?>
<?php

require_once 'config/config.php';
require_once 'config/clase_sql.php';

# Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
$clase_cli = new Clase_sql();
$result_cli = $clase_cli-> ConsultaClienteGeneral();
?>
<?php 
include ("includes/header.php")
?>

<main class="app-content">

  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Crear Reserva</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Reservas</li>
      <li class="breadcrumb-item"><a href="#">Crear Reservas</a></li>
    </ul>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="tile">
        <div class="row">
          <div class="col-lg-12">
            <form action="editreserva.php?COD_RE=<?php echo $_GET['COD_RE'];?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="form-group">
                    <label class="col-form-label" for="nummat">Numero de Matricula</label>
                    <input readonly  class="form-control" type="text" name="nummat"   value="<?php echo $num_mar;?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese numero de matricula</div>
               </div>
               <div class="form-group">
                <label for="cliente">Cedula de cliente</label>
                <select class="form-control" name="cliente">
                <?php while($fic = $result_cli->fetch_assoc()){?>
                    <option value="<?php echo $fic['CED_CLI']?>"><?php echo $fic['CED_CLI']?></option>
                <?php } ?>
                                                
                </select>
              </div>
              <div class="form-group">
                    <label class="col-form-label" for="dat">Fecha Reserva</label>
                    <input  readonly class="form-control" type="Date" name="dat" id="dat"  value="<?php echo $fech_mar;?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese fecha</div>
               </div>
              <div class="form-group">
                    <label class="col-form-label" for="date">Fecha Inicio</label>
                    <input class="form-control" type="Date" name="date" id="date"   value="<?php echo $fe_mar;?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese fecha</div>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="date1">Fecha Entrega</label>
                    <input class="form-control" type="Date" name="date1" id="date1"   value="<?php echo $f_mar;?>" required>
                            <div class="invalid-feedback">Campo vacío Ingrese Entrega</div>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="precio">Precio por dia /dolares</label>
                    <input readonly  class="form-control" type="text" name="precio" id="precio"  value="<?php echo $pre_mar;?>" required>
               </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit-all" name="actualizar"  id="">Actualizar</button>
                </div>
          </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<?php include ("includes/footer.php")?>