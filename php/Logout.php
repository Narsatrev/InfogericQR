<?php
    session_start();
    session_destroy();
    
    header("Location: ../LoginDoctorVista.php");

?>