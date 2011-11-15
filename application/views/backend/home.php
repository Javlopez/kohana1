<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <p>Bienvenido al sistema <strong><?php echo $auth->get_user()->email; ?></strong></p>
            <p style="float:right;">
            	<a href="<?php echo $logout ?>" >Salir</a>
            </p>
        </div>
    </body>
</html>
