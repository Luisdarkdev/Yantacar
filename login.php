<?php
 

 session_start();

 require_once 'admin/config/config.php';
 require_once 'admin/config/clase_sql.php';

 $clase_clave = new Clase_sql();

?>
<?php
include ("includes/header.php")
?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">NUEVO CLIENTE?</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
					<div class="button1">
					   <a href="registro.php"><input type="submit" name="Submit" value="CREAR CUENTA"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<h4 class="title">INICIAR SESION</h4>
					<div id="loginbox" class="loginbox">
						<form action="" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">CEDULA</label>
						      <input id="modlgn_username" type="text" name="usuario" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">CONTRASEÑA</label>
						      <input id="modlgn_passwd" type="password" name="contrasena" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">

							    <input type="submit" name="submit" class="button" value="Ingresar"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
	  <?php include ("includes/footer.php")?>
	  <?php

    if($_POST){
        $ced = $_POST['usuario'];
        $cla = $_POST['contrasena'];
        $result_clave = $clase_clave->ConsultaClienteClave($ced, $cla);
        $row =mysqli_fetch_array($result_clave);
        $nom_mar = $row['NOM_TCLI'];

        if($result_clave->num_rows>0){
            // Sesiones
			?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Inicio exitoso',
                    text: 'Todo correcto'

                })
            </script>
        <?php 
            $_SESSION['cedu'] = $ced;
            $_SESSION['usu'] = $nom_mar;    
            header('location: index.php');
			
        }else{ ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso ',
                    text: 'Clave/usuario incorrecto..!'

                })
            </script>
        <?php }
    }
    
?> 