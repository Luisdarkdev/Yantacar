<?php
session_start();
$cedula = $_SESSION['cedu'];
if(!isset($cedula)){
  header("location: login.php");
}
?>
<?php
include ("includes/header.php")
?>
<div class="main">
      <div class="shop_top">
	     <div class="container ">
         <div class="row">
                                <div class="col-md-6 single_left">
                                        <div class="single_image">
					     <ul id="etalage">
							<li>
								<a href="">
									<img class="etalage_thumb_image" src="admin/<?php echo substr($_GET['IMG_VE'],3);?>" />
									<img class="etalage_source_image" src="admin/<?php echo substr($_GET['IMG_VE'],3);?>" />
								</a>
							</li>
						</ul>
					</div>
                   
	                        </div>
				<div class="col-md-6 single_left">
                    <form action="funciones/insertreserva.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                             <div class="form-group">
                                    <label class="col-form-label" for="nummat">ID/RUC</label>
                                    <input readonly  class="form-control" type="text" name="cedu" value="<?php echo $_SESSION['cedu']; ?>" required>
                            </div>
                            <div class="form-group">
                                    <label class="col-form-label" for="nummat">Numero de Matricula</label>
                                    <input readonly  class="form-control" type="text" name="nummat" value="<?php echo $a=$_GET['NUM_MAT_VE']; ?>" required>
                            </div>
                            <div class="form-group">
                                    <label class="col-form-label" for="dat">Fecha Reserva</label>
                                    <input class="form-control" type="Date" name="dat" id="dat"  required>
                            </div>
                            <div class="form-group">
                                    <label class="col-form-label" for="date">Fecha Inicio</label>
                                    <input class="form-control" type="Date" name="date" id="date"  required>
                                      
                            </div>
                            <div class="form-group">
                                    <label class="col-form-label" for="date1">Fecha Entrega</label>
                                    <input class="form-control" type="Date" name="date1" id="date1"  required>
                            </div>
                            <div class="form-group">
                                    <label class="col-form-label" for="precio">Precio por dia /dolares</label>
                                    <input readonly  class="form-control" type="text" name="precio" id="precio" value="<?php echo $a=$_GET['PRECIO_VE']; ?>" required>
                            </div>
                            <div class="remember">

                        <input type="submit" name="submit" class="button" value="Reservar"><div class="clear"></div>
                        </div>                
                        </form>
                   
		</div>
                
		</div> 								

		</div>
	</div>
</div>


<?php include ("includes/footer.php")?>
</script>
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>

                 
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 500,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
 
<?php

?>