<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_mo = new Clase_sql();

    $id = $_GET['NOM_MOD'];

    $result = $clase_mo-> EliminarModelo($id);

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-gmodelo.php');

?>