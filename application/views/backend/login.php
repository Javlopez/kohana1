<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <h2>Iniciar sesión</h2>
        <?php if(isset($errors['login'])):?>
        <p style="border:#F00 1px solid;background:#dd0000;color:#fff;width:auto;">
        	<?php echo $errors['login'] ?>
        </p>
        <?php endif; ?>
        <form action="<?php echo $posturl ?>" method="POST">
            <p>
                <label>Usuario</label>
                <input type="text" value="" name="username" />
            </p>
            <p>
                <label>Password</label>
                <input type="password" value="" name="password" />
            </p>
            <p>
                <input type="checkbox" name="remember" />
                <label>Recordar password</label>
            <p>
                <input type="submit" value="Iniciar sesión" name="login" >            
            </p>            
        </form>
        <p>
            <a href="<?php echo $registerurl ?>">Registrarse</a>
        </p>
        </div>
    </body>
</html>
