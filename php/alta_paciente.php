<?php
$nombre=$_POST['nombre_paciente'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$tipo_sangre=$_POST['tipo_sangre'];
$peso=$_POST['peso'];
$talla=$_POST['talla'];
$tabaquismo=$_POST['tabaquismo'];
$escolaridad=$_POST['escolaridad'];
$estado_civil=$_POST['edo_civil'];
$numero_medicamentos=$_POST['num_med'];
$fecha_actual_medicamentos=$_POST['fecha'];
$direccion=$_POST['direccion'];
$estado_nutricional=$_POST['edo_nutricional'];
$seguro_social=$_POST['seguro_social'];
$auxiliar=$_POST['auxiliar'];
$datos_medicos=$_POST['datos_medicos'];
$descripcion_anexo=$_POST['descripcion'];
$contacto=$_POST['contacto'];
$medicinas=$_POST['medicina'];
$alergias=$_POST['alergia'];
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_name='InfogericQR';
$conexion=mysqli_connect($db_hostname,$db_username,$db_password,$db_name) OR die ('No se pudo conectar a la base de datos:'.mysqli_error());
$result = mysqli_query($conexion,"INSERT INTO `paciente`(`nombre`,`edad`,`sexo`,`tipo_sangre`,`peso`,`talla`,`tabaquismo`,`escolaridad`,`estado_civil`,`contacto`,`numero_medicamentos`,`fecha_actual_medicamentos`,`direccion`,`estado_nutricional`,`seguro_social`,`auxiliar`,`datos_medicos`,`descripcion_anexo`,`medicinas`,`alergias`) VALUES ('$nombre','$edad','$sexo','$tipo_sangre','$peso','$talla','$tabaquismo','$escolaridad','$estado_civil','$contacto','$numero_medicamentos','$fecha_actual_medicamentos','$direccion','$estado_nutricional','$seguro_social','$auxiliar','$datos_medicos','$descripcion_anexo','$medicinas','$alergias');");
if($result){
   $result2 = mysqli_query($conexion,"SELECT * FROM `paciente` WHERE  nombre='$nombre';");
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