<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_mo = new Clase_sql();

    $id = $_GET['COD_INCI'];

    $result = $clase_mo-> EliminarIncidente($id);

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-gvehiculo.php');

?>