
<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_usu = new Clase_sql();

    $nommodelo = $_POST['nommodel'];
    $marmodel = $_POST['marmodel'];
    $premodel = $_POST['premodel'];
    $combustible = $_POST['combustible'];
    $trasnmision = $_POST['trasnmision'];
    $capacidad = $_POST['capacidad'];

    $result = $clase_usu-> InsertarModelo($nommodelo,$marmodel,$premodel,$combustible,$trasnmision,$capacidad);

  /*  $_SESSION['mensaje']= 'Se guardo correctamente';
    $_SESSION['tipo']= 'success';*/

    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-modelo.php');

?>