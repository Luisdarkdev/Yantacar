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
                <form action="funciones/insertreserva.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label" for="nummat">Numero de Matricula</label>
                        <input readonly  class="form-control" type="text" name="nummat" value="<?php echo $a=$_GET['NUM_MAT_VE']; ?>" required>
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
                        <input class="form-control" type="Date" name="dat" id="dat"  required>
                                <div class="invalid-feedback">Campo vacío Ingrese fecha</div>
                   </div>
                  <div class="form-group">
                        <label class="col-form-label" for="date">Fecha Inicio</label>
                        <input class="form-control" type="Date" name="date" id="date"  required>
                                <div class="invalid-feedback">Campo vacío Ingrese fecha</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="date1">Fecha Entrega</label>
                        <input class="form-control" type="Date" name="date1" id="date1"  required>
                                <div class="invalid-feedback">Campo vacío Ingrese Entrega</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="precio">Precio por dia /dolares</label>
                        <input readonly  class="form-control" type="text" name="precio" id="precio" value="<?php echo $a=$_GET['PRECIO_VE']; ?>" required>
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