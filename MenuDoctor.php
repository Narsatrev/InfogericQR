<?php
    $esDoc=0;
    session_start();
    if(isset($_SESSION['es_doc'])){
        $esDoc=$_SESSION['es_doc'];
    }
    if($esDoc!=1){
        header("Location: index.html");
    }
?>

<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Bienvenido</title>
		<link rel="stylesheet" type="text/css" href="css/doctor.css" />
        
	</head>
	<body>
        <div id="barra_doc_up">
            <a class="icon logout" href="php/Logout.php"></a>
        </div>
        <div id="barra_doc_down">
        </div>
		<div class="container">
			<div class="main">
				<ul class="cbp-ig-grid grid2">
                    <li>
						<a href="prueba_qr.html">
							<span class="icon qr"></span>
							<h3 class="cbp-ig-title">Emergencia</h3>
						</a>
					</li>
					<li>
						<a href="registro_paciente.php">
							<span class="icon plus"></span>
							<h3 class="cbp-ig-title">Agregar Paciente</h3>
						</a>
					</li>
					<li>
						<a href="lista_pacientes.php">
							<span class="icon patients"></span>
							<h3 class="cbp-ig-title">Consultar Paciente</h3>
						</a>
                    </li>
				</ul>
			</div>
		</div>
	</body>
</html>
