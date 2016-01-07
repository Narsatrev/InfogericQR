<?php
$msg="";
if (isset($_FILES["qr_code_img"]["name"])) {
    $n_archivo_qr=$_FILES['qr_code_img']['name'];
    $tmp_name_archivo_qr=$_FILES['qr_code_img']['tmp_name'];
    if (!empty($n_archivo_qr)) {
        $dir_qr="../qr_img/".$n_archivo_qr;                   
        if(move_uploaded_file($tmp_name_archivo_qr, $dir_qr)){
            $msg="Su archvio ha sido guardado";
        }else{
            $msg="Error al guardar su archivo";
        }
    }
}else{
    $msg="Su archivo no pudo ser guardado.";
}
echo exec('whoami');
?>