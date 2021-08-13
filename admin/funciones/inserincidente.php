
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_inci = new Clase_sql();

    $matricula = $_POST['matricula'];
    $incidencias = $_POST['incidencias'];

    $result = $clase_inci-> InsertarIncidente($matricula,$incidencias);
  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-gvehiculo.php');

?>