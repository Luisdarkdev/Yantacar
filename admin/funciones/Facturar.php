<?php 
session_start();
?>
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_inci = new Clase_sql();
    $cod = $_GET['CED_CLI'];
    $result_clave = $clase_inci->ConsultarClienteUnico($cod);
        $row =mysqli_fetch_array($result_clave);
        $nom_mar = $row['NOM_TCLI'];


    $ced_usu = $_SESSION['cedula'];
    $ced_cli = $_GET['CED_CLI'];
    $cod_al = $_GET['COD_AL'];

    $num = $_GET['NUM_MAT_VE'];
    $fei = $_GET['FECHA_INI_AL'];
    $fef = $_GET['FECHA_FIN_AL'];
    $pre = $_GET['PRECIO'];


   $result = $clase_inci-> InsertarFactura($ced_usu,$ced_cli,$cod_al,$nom_mar,$num,$fei,$fef,$pre);
   $result = $clase_inci->ActualizarReserva1($cod_al);
  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/
    // header ('Location: consulta_cliente.php');
  header ('Location: ../factura.php');

?>