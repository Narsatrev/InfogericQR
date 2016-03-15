<?php 
    session_start();
    $_SESSION['es_doc']=1;
    header("Location: ../MenuDoctor.php");
?>