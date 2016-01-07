<?php 
    $db_hostname='localhost';
    $db_username='root';
    $db_password='';
    $db_name='InfogericQR';
    $conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_name) OR die ('No se pudo conectar a la base de datos:'.mysqli_error());

?>