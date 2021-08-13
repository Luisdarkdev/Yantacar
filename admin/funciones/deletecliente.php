<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_cli = new Clase_sql();

    $id = $_GET['CED_CLI'];

    $result = $clase_cli-> EliminarCliente($id);

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-gcliente.php');

?>