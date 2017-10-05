<?php
require_once 'layouts/master.tpl.php';
?>
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