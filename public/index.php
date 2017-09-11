<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

$usuario = new User();
$r = $usuario->FindById(1);
var_dump($r);
