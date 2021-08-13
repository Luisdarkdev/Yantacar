<?php
    require_once 'admin/config/config.php';
    require_once 'admin/config/clase_sql.php';
$clase_ve = new Clase_sql();
$result_cli = $clase_ve->ConsultaMarcaGeneral();
?>
<?php
include ("includes/header.php")
?>
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/slider1.png" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">El mejor<br>Transporte</h1>
                        <!-- /Text title -->
                        
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/slider2.png" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Conoce<br>Viaja y disfruta</h1>
                      
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
      </div>
	<div class="features">
		<div class="container">
			<h3 class="m_3">MARCAS</h3>
			<div class="close_but"><i class="close1"> </i></div>
     
			  <div class="row ">
        <?php while($f = $result_cli->fetch_assoc()){ ?>
      
    
				<div class="col-md-3 ">
				  <div class="view view-ninth"><a href="marcas.php?NOM_MARC=<?php echo $f['NOM_MARC'] ?>">
                    <img src="admin/<?php echo substr($f['IMG_MARCA'],3); ?>" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Los mejores Vehiculos</h2>
                        <p>Solo lo encuentras en Yantcar</p>
                      </div>
                   </a> </div>
                  <h4 class="m_4" class="text"><a href="marcas.php?NOM_MARC=<?php echo $f['NOM_MARC'] ?>"><?php echo $f['NOM_MARC']; ?></a></h4>
            </div>

            <?php }?>
            
			</div>
  
		 </div>
	    </div>
	<?php include ("includes/footer.php")?>
	