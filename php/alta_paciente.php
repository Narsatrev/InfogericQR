<?php
$nombre=$_POST['nombre_paciente'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$seguro_social=$_POST['seguro_social'];
$escolaridad=$_POST['escolaridad'];
$estado_civil=$_POST['edo_civil'];
$residencia_actual=$_POST['residencia_actual'];

$peso=$_POST['peso'];
$talla=$_POST['talla'];
$tipo_sangre=$_POST['tipo_sangre'];
$estado_nutricional=$_POST['edo_nutricional'];
$auxiliar=$_POST['auxiliar'];

$diabetes=$_POST['diabetes'];
$hipertension=$_POST['hipertension'];
$cancer=$_POST['cancer'];
$alzheimer=$_POST['alzheimer'];
$alcohol=$_POST['alcohol'];
$tabaco=$_POST['tabaco'];
$drogas=$_POST['drogas'];

$contacto=$_POST['contacto'];

$medicinas=$_POST['medicinas'];
$alergias=$_POST['alergia'];

$descripcion_anexo=$_POST['descripcion'];
$fecha=$_POST['fecha'];

require('conexion.php');

$result = mysqli_query($conexion,"INSERT INTO `paciente`(
`nombre`,
`edad`,
`sexo`,
`seguro_social`,
`escolaridad`,
`estado_civil`,
`residencia_actual`,

`peso`,
`talla`,
`tipo_sangre`,
`auxiliar`,
`estado_nutricional`,

`diabetes`,
`hipertension`,
`cancer`,
`alzheimer`,
`alcohol`,
`tabaco`,
`drogas`,

`medicinas`,
`alergias`,

`contacto`,

`descripcion_anexo`,
`fecha`) VALUES (

'$nombre',
'$edad',
'$sexo',
'$seguro_social',
'$escolaridad',
'$estado_civil',
'$residencia_actual',

'$peso',
'$talla',
'$tipo_sangre',
'$auxiliar',
'$estado_nutricional',

'$diabetes',
'$hipertension',
'$cancer',
'$alzheimer',
'$alcohol',
'$tabaco',
'$drogas',

'$contacto',
'$medicinas',
'$alergias',
'$descripcion_anexo',
'$fecha');");
mysqli_close($conexion);
if($result){
   echo "éxito";
}else{
    echo $result->error;
}
?>