
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $nummatricula = $_POST['nummatricula'];
    $nommodelo = $_POST['nommodelo'];
    $kvehiculo = $_POST['kvehiculo'];
    $cvehiculo = $_POST['cvehiculo'];
    $vimage1=$_FILES["file"]["name"];
    $archivo=$_FILES["file"]["tmp_name"];
    $ruta="../images/imgcar";
    $ruta=$ruta."/".$vimage1;
    move_uploaded_file($archivo,$ruta);

    $result = $clase_usu-> InsertarVehiculo($nummatricula,$nommodelo,$kvehiculo,$cvehiculo,$vimage1);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-vehiculo.php');

?>