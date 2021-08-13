<?php
 
    require_once 'admin/config/config.php';
    require_once 'admin/config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_vehi = new Clase_sql();

    $result_vehi = $clase_vehi-> ConsultaVehiculoGeneral();
?>
<?php
include ("includes/header.php")
?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
			<?php while($f = $result_vehi->fetch_assoc()){ ?>
				<div class="col-md-3 "><a href="alquilar.php">
					<img src="admin/<?php echo substr($f['IMG_VE'],3);?>" class="img-responsive" />
					<span class="new-box">
						<span class="new-label"><?php echo $f['PRECIO_VE']; ?>$</span>
					</span>
					<div class="shop_desc">
						<h3><?php echo $f['NOM_MODEL']; ?></h3>
						<p><?php echo $f['CAPACIDAD']; ?> personas</p>
						<span class="actual"><?php echo $f['ANO']; ?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="reservas.php?NUM_MAT=<?php">Reservar</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<?php }?>
			</div>
		 </div>
	   </div>
	  </div>
	  <?php include ("includes/footer.php")?>