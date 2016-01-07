<!DOCTYPE html>
<?php
require('php/conexion.php');
    $paciente=mysqli_query($conexion,"SELECT id,nombre,edad,fecha_actual_medicamentos,direccion   from paciente");
    $n=mysqli_num_rows($paciente);
    if(!$n>0){
        echo "No hay hay pacientes que mostrar.";
    }
?>
<html>
    <head>
        <title>
            Lista Pacientes        
        </title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ultima actualizacion</th>
                <th>Direccion</th>
                <th>Detalles</th>
            </tr>
            <?php
for($i=0;$i<$n;$i++){    
    while($row=mysqli_fetch_array($paciente)){
        echo "<tr>";
        $id=$row[0];
        $nombre=$row[1];
        $edad=$row[2];
        $fecha_actualizacion=$row[3];
        $direcc=$row[4];
        echo "<td>".$nombre."</td>".
            "<td>".$edad."</td>".
            "<td>".$fecha_actualizacion."</td>".
            "<td>".$direcc."</td>".
            "<td><form action='detallesPaciente.php?pac=".$id."' method='post' class='forma_detalles_paciente'>".
            "<input type='hidden' value='".$id."' name='id_paciente'/>".
            "<input type='submit' value='Detalles'/></form></td>";
        echo "</tr>";
    }
}
            ?>
        </table>
    </body>
</html>

