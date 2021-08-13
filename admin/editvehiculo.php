
<?php
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';
$clase_ve = new Clase_sql();
$result_mod = $clase_ve-> ConsultaMarca();

if(isset($_GET['NUM_MAT_VE'])){
    $cod = $_GET['NUM_MAT_VE'];
    $result = $clase_ve-> ConsultarVehiculoUnico($cod);
    $row =mysqli_fetch_array($result);
    $num_mat= $row['NUM_MAT_VE'];
    $marca = $row['NOM_MARC'];
    $modelo = $row['NOM_MODEL'];
    $kilometraje = $row['KM_VE'];
    $color = $row['COLOR_VE'];
    $capacidad = $row['CAPACIDAD'];
    $combustible = $row['COMBUSTIBLE'];
    $transmision = $row['TRANSMISION'];
    $ano = $row['ANO'];
    $presio = $row['PRECIO_VE'];  
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['NUM_MAT_VE'];
    $nummatricula = $_POST['nummatricula'];
    $marca = $_POST['marca'];
    $nommodel = $_POST['nommodel'];
    $kvehiculo = $_POST['kvehiculo'];
    $cvehiculo = $_POST['cvehiculo'];
    $capacidad = $_POST['capacidad'];
    $combustible = $_POST['combustible'];
    $transmision = $_POST['transmision'];
    $presio = $_POST['presio'];
    $an = $_POST['an'];
    $vimage1=$_FILES["file"]["name"];
    $archivo=$_FILES["file"]["tmp_name"];
    $ruta="images/imgcar";
    $ruta=$ruta."/".$vimage1;
    move_uploaded_file($archivo,$ruta);
    $ruta="../".$ruta;

    $result = $clase_ve-> ActualizarVehiculo($cod,$nummatricula,$marca,$nommodel,$kvehiculo,$cvehiculo,$capacidad,$combustible,$transmision,$presio,$an,$ruta);

    // header ('Location: consulta_cliente.php');
  header ('Location: page-gvehiculo.php');
}
?>
<?php include ("includes/header.php")?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario Editar Vehiculo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="editvehiculo.php?NUM_MAT_VE=<?php echo $_GET['NUM_MAT_VE'];?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label" for="nummatricula">Ingrese numero de matricula</label>
                        <input class="form-control text-uppercase" type="text" name="nummatricula" id="nummatricula" value="<?php echo $num_mat;?>" placeholder="AAA 0123" required>
                                <div class="invalid-feedback">Campo vacío Ingrese matricula</div>

                   </div>
                   <div class="form-group">
                    <label for="marca">Marca</label>
                    <select class="form-control" name="marca" id="marca">
                    <?php while($fic = $result_mod->fetch_assoc()){?>
                        <option value="<?php echo $fic['NOM_MARC']?>"><?php echo $fic['NOM_MARC']?></option>
                    <?php } ?>
                                                    
                    </select>
                  </div>
                   <div class="form-group">
                        <label class="col-form-label" for="nommodel">Ingrese Nombre del Modelo</label>
                        <input class="form-control" type="text" name="nommodel" placeholder="Modelo"  value="<?php echo $modelo;?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese modelo</div>
                   </div>    
                  <div class="form-group">
                        <label class="col-form-label" for="kvehiculo">Ingrese kilometraje vehiculo</label>
                        <input class="form-control" type="text" name="kvehiculo" id="kvehiculo" value="<?php echo $kilometraje;?>" placeholder="Kilometraje" required>
                                <div class="invalid-feedback">Campo vacío Ingrese vehiculo</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="cvehiculo">Ingrese color Vehiculo</label>
                        <input class="form-control" type="text" name="cvehiculo" id="cvehiculo" value="<?php echo $color;?>" placeholder="Color" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Color</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="capacidad">Capacidad de personas</label>
                        <input class="form-control" type="text" name="capacidad"  placeholder="Capacidad"  value="<?php echo $capacidad;?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese capacidad</div>
                   </div>
                   <div class="form-group">
                   <label class="col-form-label" for="combustible">Tipo de combustible</label>
                        <select class="form-control" name="combustible" >
                            <option value="Gasolina">Gasolina</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electrico">Electrico</option>
                            <option value="Hibrido">Hirbido</option>
                        </select>
                   </div>
                   <div class="form-group">
                   <label class="col-form-label" for="transmision">Tipo de Transmision</label>
                        <select class="form-control" name="transmision" >
                            <option value="Manual">Manual</option>
                            <option value="Automatica">Automatica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="presio">Precio por dia/dolares</label>
                        <input class="form-control" type="text" name="presio"  placeholder="Precio"  value="<?php echo $presio;?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Precio</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="an">Año</label>
                        <input class="form-control" type="number" name="an"  placeholder="año" value="<?php echo $ano;?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese año</div>
                   </div>
                    <div class="form-group">
                    <h5 >Seleccionar imagen</h5>
                        <input type="file" name="file" id="file" accept=".jpg,.png,.jpeg" >
                        <p></p>
                        <div id="preview" class="styleImage"></div>
                    </div>
                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all" name="actualizar" id="">Actualizar</button>
                    </div>
              </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>
<script>
  document.getElementById('file').onchange=function(e){
    let reader=new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload=function(){
        let preview=document.getElementById('preview');
            image=document.createElement('img');
            image.src=reader.result;
            image.style.width="200px";
            preview.innerHTML='';
            preview.append(image);
    }
}
</script>
<?php include ("includes/footer.php")?>
