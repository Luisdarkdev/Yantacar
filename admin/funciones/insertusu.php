<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $cedula = $_POST['cedula'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];


    $result = $clase_usu-> InsertarUsuario($cedula,$usuario,$contra,$correo);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-user.php');