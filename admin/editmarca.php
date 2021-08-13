
<?php
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';
$clase_ve = new Clase_sql();

if(isset($_GET['NOM_MARC'])){
    $cod = $_GET['NOM_MARC'];
    $result = $clase_ve-> ConsultarMarcaUnico($cod);
    $row =mysqli_fetch_array($result);
    $nom_mar = $row['NOM_MARC'];
    $img_mar = $row['IMG_MARCA']; 
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['NOM_MARC'];
    $marca = $_POST['marca'];
    $vimage1=$_FILES["file"]["name"];
    $archivo=$_FILES["file"]["tmp_name"];
    $ruta="../images/imgmar";
    $ruta=$ruta."/".$vimage1;
    move_uploaded_file($archivo,$ruta);



    $result = $clase_ve-> ActualizarMarca($cod,$marca,$ruta);
    // header ('Location: consulta_cliente.php');
  header ('Location: page-gmarca.php');
}
?>

<?php 
include ("includes/header.php")
?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario Actualizar Marca</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="editmarca.php?NOM_MARC=<?php echo $_GET['NOM_MARC'];?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label text-uppercase" for="marca">Ingrese Nombre del Marca</label>
                        <input class="form-control" type="text" name="marca" placeholder="Marca" value="<?php echo $nom_mar; ?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese marca</div>
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