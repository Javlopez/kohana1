<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <h2>Registrarse</h2>
         <?php if(isset($errors['register'])):?>
        <p style="border:#F00 1px solid;background:#cc0000;color:#fff;width:auto;">
        	<?php echo $errors['register'] ?>
        </p>
        <?php endif; ?>
        <form action="<?php echo $registerurl ?>" method="POST">
            <p>
                <label>Usuario</label>
                <input type="text" value="" name="username" />
            </p>
            <p>
                <label>Password</label>
                <input type="password" value="" name="password" />
            </p>
                <input type="submit" value="Registrarme" name="login" >            
            </p>            
        </form>
        <p>
            <a href="<?php echo $posturl ?>">Login</a>
        </p>
        </div>
    </body>
</html>
