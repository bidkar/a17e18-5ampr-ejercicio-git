<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

if(!$usuario=User::Create('alumno2','Pedro','Castro','pedro@castro',md5('123'))) {
    echo 'Error: nombre de usuario o email existente.';
} else {
    var_dump($usuario);
}
