<?php

$latitud=$_POST['lat'];
$longitud=$_POST['lng'];
$direccion=$_POST['dir'];
$nombre=$_POST['nombre'];
$tiempo=$_POST['tiempo'];


$arr_semana=array("Mon"=>"Lunes","Tue"=>"Martes","Wed"=>"Miércoles","Thu"=>"Jueves",
                  "Fri"=>"Viernes","Sat"=>"Sábado","Sun"=>"Sunday");
$arr_mes=array("Jan"=>"Enero","Feb"=>"Febrero","Mar"=>"Marzo","Apr"=>"Abril",
                "May"=>"Mayo","Jun"=>"Junio","Jul"=>"Julio","Aug"=>"Agosto",
                "Sep"=>"Septiembre","Oct"=>"Octubre","Nov"=>"Noviembre","Dec"=>"Diciembre");

$fecha=explode(" ",$tiempo);

$t=$arr_semana[$fecha[0]]." ".$fecha[2]." de ".$arr_mes[$fecha[1]].", a las ".$fecha[4].".";

$m="La pulsera de su familiar, ".$nombre.", fue escaneada en la siguiente fecha y hora:\n".$t.".\n"; 
$m.="Fue cerca de la siguiente dirección (la dirección no es exacta):\n".$direccion."\n\n";
$m.="Mapa de la ubicación:\n";
$m.="narsatrev.com/mapa/mapa.php?lat=".$latitud."&long=".$longitud."\n";

$dest="david.manzanarez.v@gmail.com,narsatrev@yahoo.com";

if(!mail($dest,"Pulsera de ".$nombre." Escaneada",$m)){
    echo error_get_last();
}else{
    echo "Su mensaje fue enviado a ".$dest." Tiempo:".$t;
}
?>