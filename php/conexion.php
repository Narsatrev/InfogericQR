<?php 
    $db_hostname='localhost';
    $db_username='root';
    $db_password='';
    $db_name='InfogericQR';
    $conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_name) OR die ('No se pudo conectar a la base de datos:'.mysqli_error());

//    $db_hostname='79.170.40.232';
//    $db_username='cl21-infoqr';
//    $db_password='Ck4rs3R.q';
//    $db_name='cl21-infoqr';
//    $conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_name) OR die ('No se pudo conectar a la base de datos:'.mysqli_error());

?>