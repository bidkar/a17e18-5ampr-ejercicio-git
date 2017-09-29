<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-theme.css">
</head>
<body>
    <div style="width:300px;">
        <form action="#" id="loginform" method="post">
            <fieldset>
                <legend>Login Form</legend>
                <div>
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id="usuario">
                </div>
                <div>
                    <label for="passwd">Contraseña:</label>
                    <input type="password" name="passwd" id="passwd">
                </div>
                <div>
                    <a href="remember.php">¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit">Iniciar sesión</button>
                <hr>
                ¿No tienes una cuenta?
                <a href="signup.php"> Registrate aquí</a>
            </fieldset>
        </form>
    </div>
</body>
</html>