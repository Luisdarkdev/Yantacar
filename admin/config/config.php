<?php


    # Conexion
    define ('SERVIDOR','localhost');
    define ('USUARIO','root');
    define ('CLAVE','');
    define ('BDD','bdd_alquier');

    # Conexion para errores de conectividad
    $conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BDD) or die ('Hay un error de conexion');
?>