<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
$clase_ve = new Clase_sql();

if(isset($_POST['actualizar'])){

    $cedula = $_POST['cedula'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];

    
    $result = $clase_ve-> ActualizarUsuario($cedula,$usuario,$contra,$correo);
    // header ('Location: consulta_cliente.php');
  header ('Location: cerrar.php');
}
?>