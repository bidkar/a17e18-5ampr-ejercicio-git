<?php
return
    spl_autoload_register(function($classname)
	{
        // $classname = Src\Models\User
		$path = strtolower($classname); // src\models\user
		$path = str_replace("\\", "/", $path); // src/models/user
		$path = APP_DIR . $path . ".php"; // c:/xampp/htdocs/git/ + src/models/user + .php  => c:/xampp/htdocs/git/src/models/user.php
		
		if (is_readable($path))
			require $path;
		else
			die('Error al leer el archivo ' . $path);
	});