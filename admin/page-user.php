
<?php
include ("includes/header.php")
?>
    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="images/usuario.png">
              <h4><?php echo $_SESSION['usuario'] ?></h4>
              <p> <?php echo $_SESSION['cedula'] ?></p>
              <p>Admin</p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">Configuracion Usuario</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-new" data-toggle="tab">Crear Usuario</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Configuracion</h4>
                <form action="funciones/actualizarusuario.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                  <div class="form-group">
                      <label>Cedula</label>
                      <input class="form-control" readonly type="number" name="cedula" value="<?php echo $_SESSION['cedula'] ?>" required>
                      <div class="invalid-feedback">Campo vacío,ingrese cedula</div>
                  </div>

                  <div class="form-group">
                      <label>Nombre usuario</label>
                      <input class="form-control" type="text" name="usuario" value="<?php echo $_SESSION['usuario'] ?>" required>
                      <div class="invalid-feedback">Campo vacío, ingrese usuario</div>
                  </div>

                    
                  <div class="form-group">
                  <label>Contraseña</label>
                      <input class="form-control" type="text" name="contra" value="<?php echo $_SESSION['password'] ?>" required>
                      <div class="invalid-feedback">Campo vacío, ingrese contraseña</div> 
                  </div>
                    
                      <div class="form-group">
                      <label>Correo</label>
                      <input class="form-control" type="email" id="email"  value="<?php echo $_SESSION['email'] ?>" name="correo" required>
                      <span id="emailOK"></span>
                    </div>
                      



                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all" name="actualizar" id="">Actualizar</button>
                    </div>
                  </form>
              </div>
            </div>
            <div class="tab-pane fade" id="user-new">
              <div class="tile user-settings">
                <h4 class="line-head">Nuevo usuario</h4>
                <form action="funciones/insertusu.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                  <div class="form-group">
                      <label>Cedula</label>
                      <input class="form-control" type="number" name="cedula" required>
                      <div class="invalid-feedback">Campo vacío,ingrese cedula</div>
                  </div>
             
                  <div class="form-group">
                      <label>Nombre usuario</label>
                      <input class="form-control" type="text" name="usuario" required>
                      <div class="invalid-feedback">Campo vacío, ingrese usuario</div>
                  </div>

                    
                  <div class="form-group">
                  <label>Contraseña</label>
                      <input class="form-control" type="text" name="contra" required>
                      <div class="invalid-feedback">Campo vacío, ingrese contraseña</div> 
                  </div>
                    
                      <div class="form-group">
                      <label>Correo</label>
                      <input class="form-control" type="email" id="email" name="correo" required>
                      <span id="emailOK"></span>
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
   <?php
    include ("includes/footer.php")
    ?>