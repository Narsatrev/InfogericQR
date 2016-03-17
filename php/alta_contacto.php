<?php
$nombre=$_POST['con_emergencia'];
$telefono_primario=$_POST['tel_primario'];
$telefono_opcional=$_POST['tel_opcional'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
require('conexion.php');
$result = mysqli_query($conexion,"INSERT INTO `contacto`(`nombre`,`telefono_primario`,`telefono_opcional`,`direccion`,`email`) VALUES ('$nombre','$telefono_primario','$telefono_opcional','$direccion','$email');");
if($result){
    $result2 = mysqli_query($conexion,"SELECT * FROM `contacto` WHERE  nombre='$nombre' AND telefono_primario='$telefono_primario' ;");
        if ($result2->num_rows>0){
            while($row = $result2->fetch_assoc()){ 
                echo $row['id'];
            }
        }else{
            echo "hola";
        }
        mysqli_close($conexion);
    }else{
        mysqli_close($conexion);
        echo $result->error;
    }
?>