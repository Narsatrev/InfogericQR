<?php ?>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="login" method="post" action="php/Login.php">
            <label>Usuario</label>
            <input type="text" value="" id="user">
            <label>Contraseña</label>
            <input type="password" id="passwd">
            <input type="submit" value="Ingresar">            
        </form>
    </body>
</html>