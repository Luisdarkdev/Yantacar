

<?php 
include ("includes/header.php")
?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario crear Incidencias</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="funciones/inserincidente.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    
                   <div class="form-group">
                    
                      <label class="control-label" for="matricula">Numero Matricula</label>
                      <input readonly class="form-control" name="matricula"  type="text"  value="<?php echo $mat = $_GET['NUM_MAT_VE'];?>">
                    
                  </div>
                  <div class="form-group">
                        <label class="col-form-label" for="incidencias">Fecha Incidente</label>
                        <input type="date" class="form-control" name="date" >
                              <div class="invalid-feedback">Campo vacío, ingrese fecha</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="incidencias">Describir Incidencias</label>
                        <textarea class="form-control" name="incidencias" rows="3" required></textarea>
                                <div class="invalid-feedback">Campo vacío, ingrese descripcion</div>
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