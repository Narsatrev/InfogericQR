<?php
$nombre=$_POST['nombre'];
$telefono_primario=$_POST['telefono_primario'];
$telefono_opcional=$_POST['telefono_opcional'];
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='InfogericQR';
$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_name) OR die ('No se pudo conectar a la base de datos:'.mysqli_error());
$result = mysqli_query($conexion,"INSERT INTO `contacto`(`nombre`,`telefono_primario`,`telefono_opcional`) VALUES ('$nombre','$telefono_primario','$telefono_opcional');");
if($result){
    $result2 = mysqli_query($conexion,"SELECT * FROM `contacto` WHERE  nombre='$nombre' AND telefono_primario='$telefono_primario' ;");
        if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) { 
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