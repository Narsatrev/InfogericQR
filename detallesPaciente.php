<?php

    $esDoc=0;
    session_start();
    if(isset($_SESSION['es_doc'])){
        $esDoc=$_SESSION['es_doc'];
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $datos_paciente['nombre']?>
        </title>
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/cuestionario.css" />
        <script src="frameworks/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/grid.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/version.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/detector.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/formatinf.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/errorlevel.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/bitmat.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/datablock.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/bmparser.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/datamask.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/rsdecoder.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/gf256poly.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/gf256.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/decoder.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/qrcode.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/findpat.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/alignpat.js"></script>
        <script type="text/javascript" src="frameworks/js-qr/databr.js"></script>
        <script type="text/javascript" src="frameworks/js-qr-gen/qrcode.js"></script>
        <meta charset="utf-8"/>
    </head>
<?php
    

$id_paciente=$_POST['id_paciente'];

require('php/conexion.php');
    $paciente=mysqli_query($conexion,"SELECT * from paciente WHERE id='$id_paciente'");
    $n=mysqli_num_rows($paciente);
    if(!$n>0){
        echo "El paciente no existe";
    }

//recuperar datos del contacto
    $datos_paciente=mysqli_fetch_assoc($paciente);                
?>

    <body>
        <div class="margen" id="#margen_top"></div>
        <div class="datos">
            <div class="row">
                <div class="col-sm-2"> Nombre:</div>
                <div class="col-sm-4"><?php echo $datos_paciente['nombre']?></div>
            </div>
            <div class="row">
                <div class="col-sm-3"> Edad:</div>
                <div class="col-sm-2"> <?php echo $datos_paciente['edad']?></div>
                <div class="col-sm-2"> Sexo:</div>
                <div class="col-sm-2"><?php echo $datos_paciente['sexo']?></div>
            </div>
            <div class="row">
                <div class="col-sm-3">Tipo de sangre:</div>
                <div class="col-sm-2"><?php echo $datos_paciente['tipo_sangre']?></div>
            
        <?php 
        if($esDoc==1){
            echo "<div class='col-sm-2'>Peso:</div> <div class='col-sm-2'>".$datos_paciente['peso']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Talla:</div> <div class='col-sm-2'>".$datos_paciente['talla']."</div>".
            "<div class='col-sm-2'>Tabaquismo: </div> <div class='col-sm-1'>".$datos_paciente['tabaquismo']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Escolaridad(años):</div> <div class='col-sm-2'>".$datos_paciente['escolaridad']."</div>".
            "<div class='col-sm-2'>Estado civil:</div> <div class='col-sm-2'>".$datos_paciente['estado_civil']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Numero de Medicamentos:</div> <div class='col-sm-2'>".$datos_paciente['numero_medicamentos']."</div>".
            "<div class='col-sm-2'>Ultima actualizacion:</div> <div class='col-sm-2'>".$datos_paciente['fecha_actual_medicamentos']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Dirección:</div> <div class='col-sm-5'>".$datos_paciente['direccion']."</div></div>";
        }
        
        
        $id_contacto=$datos_paciente['contacto'];

        $stringx="SELECT * from contacto WHERE id='$id_contacto';";
        $datos_contacto=mysqli_query($conexion,$stringx);
        $nc=mysqli_num_rows($datos_contacto);
        if(!$nc>0){
            echo "El paciente no tiene datos de contacto.</br>";
        }else{
            $contacto=mysqli_fetch_assoc($datos_contacto);                
            echo "<hr/><div class='row'><div class='col-sm-3'>Nombre de contacto:</div> <div class='col-sm-4'>".$contacto['nombre']."</div></div>";
            echo "<div class='row'><div class='col-sm-3'>Teléfono primario:</div> <div class='col-sm-2'>".$contacto['telefono_primario']."</div>";
            echo "<div class='col-sm-2'>Teléfono opcional:</div> <div class='col-sm-2'>".$contacto['telefono_opcional']."</div></div>";
        }                                   
        if($esDoc==1){
            echo "<hr><div class='row'><div class='col-sm-3'>Estado Nutricional:</div> <div class='col-sm-2'>".$datos_paciente['estado_nutricional']."</div>".
            "<div class='col-sm-2'>Seguro social:</div> <div class='col-sm-2'>".$datos_paciente['seguro_social']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Datos medicos:</div><div class='col-sm-5'>".$datos_paciente['datos_medicos']."</div></div>".
            "<div class='row'><div class='col-sm-3'>Anexo:</div><div class='col-sm-5'>".$datos_paciente['descripcion_anexo']."</div></div>".
            "<div class='row'><div class='col-sm-2'>Auxiliares:</div><div class='col-sm-5'>".$datos_paciente['auxiliar']."</div></div>";
        }
        ?>
        
        <button id='button_QR' value="Generar QR">Generar QR</button>
        <div id='qrcode_paciente'></div>
            </div>
        <script>
            
            $("#button_QR").click(function(){
                var qrcode = new QRCode(document.getElementById("qrcode_paciente"), {
                   width : 100,
                   height : 100
                });
                qrcode.makeCode(window.location.href);
            });
        </script>
        
        
    </body>
</html>

