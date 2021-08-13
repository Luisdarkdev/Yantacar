
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_inci = new Clase_sql();
    
    $fechaActual = date('d-m-Y');
    $cod = $_GET['COD_RE'];
    $num = $_GET['NUM_MAT_VE'];
    $ced = $_GET['CED_CLI'];

    $fei = $_GET['FECHA_INI_RE'];
    $fef = $_GET['FECHA_FIN'];
    $pre = $_GET['PRECIO'];
 

   $result = $clase_inci-> InsertarAlquiler1($num,$cod,$ced,$fechaActual,$fei,$fef,$pre);
   $result = $clase_inci->Actualizarreser($cod);
  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-alquiler.php');

?>