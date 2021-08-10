<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario publicar Vehiculo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Publicar Vehiculo</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="funciones/inservehiculo.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-form-label" for="nummatricula">Numero de matricula</label>
                        <input class="form-control" type="text" name="nummatricula" id="nummatricula" placeholder="Numero matricula">

                   </div>
                   <div class="form-group">
                    <label for="nommodelo">Modelo</label>
                    <select class="form-control" name="nommodelo" id="nommodelo">
                      <option value="1">1</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label" for="kvehiculo">Kilometraje vehiculo</label>
                        <input class="form-control" type="text" name="kvehiculo" id="kvehiculo" placeholder="Kilometraje vehiculo">
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="cvehiculo">Color Vehiculo</label>
                        <input class="form-control" type="text" name="cvehiculo" id="cvehiculo" placeholder="Color">
                   </div>
                    <div class="form-group">
        
                    </div>

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
