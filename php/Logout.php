<?php
    session_start();
    $_SESSION['es_doc']=0;
//    session_destroy();    
    header("Location: ../LoginDoctorVista.php");

?>