<?php
 

 session_start();

 require_once 'config/config.php';
 require_once 'config/clase_sql.php';

 $clase_clave = new Clase_sql();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Yantacar Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Yantacar</h1>
      </div>
      <div class="login-box">
        <form action="" method="POST" name="formLogin" class="needs-validation login-form" novalidate>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">CEDULA</label>
            <input class="form-control" type="text" placeholder="Cedula" name="usuario" autofocus required>
            <div class="invalid-feedback">Ingrese cedula</div>

          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
            <div class="invalid-feedback">Ingrese contraseña</div>

          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>

      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validarDatos.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>

<?php

    if($_POST){
        $ced = $_POST['usuario'];
        $cla = $_POST['contrasena'];
        $result_clave = $clase_clave->ConsultaUsuarioClave($ced, $cla);
        $row =mysqli_fetch_array($result_clave);
        $nom_mar = $row['NOM_USE'];
        $pass = $row['PASS_USE'];
        $corr = $row['COR_USE'];

        if($result_clave->num_rows>0){
            // Sesiones
            $_SESSION['cedula'] = $ced;
            $_SESSION['usuario'] = $nom_mar;    
            $_SESSION['password'] = $pass;
            $_SESSION['email'] = $corr;
            header('location: dashboard.php');
        }else{ ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso',
                    text: 'Clave/usuario incorrecto..!'

                })
            </script>
        <?php }
    }
    
?> 