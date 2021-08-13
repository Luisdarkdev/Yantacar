<?php
    require_once '../admin/config/config.php';
    require_once '../admin/config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $nummat = $_POST['nummat'];
    $cliente = $_POST['cedu'];
    $dat = $_POST['dat'];
    $date = $_POST['date'];
    $date1 = $_POST['date1'];
    $precio = $_POST['precio'];


    $result = $clase_usu-> InsertarReserva($nummat,$cliente,$dat,$date,$date1,$precio);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../vehiculos.php');
  ?>