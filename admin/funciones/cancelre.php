<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
$clase_ve = new Clase_sql();

    $cod = $_GET['COD_RE'];

    $result = $clase_ve-> CancelarReserva($cod);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-greservas.php');
  ?>