<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $nummident = $_POST['nummident'];
    $Tcliente = $_POST['Tcliente'];
    $Inombres = $_POST['Inombres'];
    $Iapellidos = $_POST['Iapellidos'];
    $Idireccion = $_POST['Idireccion'];
    $Numtelef = $_POST['Numtelef'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    

    $result = $clase_usu-> InsertarCliente($nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef,$correo,$contra);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-cliente.php');

?>