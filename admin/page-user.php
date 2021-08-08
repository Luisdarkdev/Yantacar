<?php
include ("includes/header.php")
?>
    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="images/usuario.png">
              <h4>John Doe</h4>
              <p>FrontEnd Developer</p>
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
                <form>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>First Name</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                      <label>Last Name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Email</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Mobile No</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Office Phone</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Home Phone</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="user-new">
              <div class="tile user-settings">
                <h4 class="line-head">Nuevo usuario</h4>
                <form>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>First Name</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                      <label>Last Name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Email</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Mobile No</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Office Phone</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Home Phone</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
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