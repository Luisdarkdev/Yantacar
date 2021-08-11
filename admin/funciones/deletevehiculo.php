<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_ve = new Clase_sql();

    $id = $_GET['NUM_MAT_VE'];

    $result = $clase_ve-> EliminarVehiculo($id);

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-gvehiculo.php');

?>