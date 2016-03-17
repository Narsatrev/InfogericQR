<?php ?>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css" />
    </head>
    <body>
        <div id="barra_doc_up"></div>
        <form id="login" method="post" action="#">
            <div class="row">
                <div class="col-sm-3">
                    <label>Usuario</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" value="" id="user" style="width:100%;">
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label>Contraseña</label>
                </div>
                <div class="col-sm-6">
                   <input type="password" id="passwd" style="width:100%;">
                </div>
                
            </div>
            
            <input type="submit" value="Ingresar" class="boton">  
        </form>
        <div id="barra_doc_down"></div>
    </body>
</html>