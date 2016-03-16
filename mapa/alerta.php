<?php

$latitud=$_POST['lat'];
$longitud=$_POST['lng'];
$tiempo=$_POST['tiempo'];

$m="La pulsera de su familiar fue escaneada en la siguiente fecha y hora:\n ".$tiempo."\n"; 
$m.=" en las siguientes coordenadas geográficas:\n Lat: ".$latitud." Long: ".$longitud;
$m.="Por favor visite el siguiente link para saber la ubicación exacta:\n";
$m.="narsatrev.com/mapa/mapa.php?lat=".$latitud."&long=".$longitud."\n";

$dest="david.manzanarez.v@gmail.com,narsatrev@yahoo.com";

if(!mail($dest,"Pulsera Escaneada",$m)){
    echo error_get_last();
}else{
    echo "su mensaje fue enviado a ".$dest;
}
?>