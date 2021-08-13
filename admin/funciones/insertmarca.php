
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $marca = $_POST['marca'];
    $vimage1=$_FILES["file"]["name"];
    $archivo=$_FILES["file"]["tmp_name"];
    $ruta="../images/imgmar";
    $ruta=$ruta."/".$vimage1;
    move_uploaded_file($archivo,$ruta);



    $result = $clase_usu-> InsertarMarca($marca,$ruta);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-marca.php');

?>